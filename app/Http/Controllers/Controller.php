<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register(Request $request) {
        $this->collectActivity($request);
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        try {
            $user = User::create(request(['name', 'email', 'password']));
        } catch (QueryException $e) {
            return back()->withErrors([
                'message' => 'The provided email is already registered'
            ]);
        }
        try {
            $this->sendConfirmationMail($request);
        } catch (QueryException $e) {
            return back()->withErrors([
                'message' => 'Confirmation email sending failed'
            ]);
        }
        auth()->login($user);
        return redirect("/");
    }

    public function login(Request $request) {
        $this->collectActivity($request);
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
//        echo json_encode($credentials);
        if (auth()->attempt($credentials, $request['remember']) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        return redirect("/");
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->to('/');
    }

    public function welcome(Request $request)
    {
        $this->collectActivity($request);
        return view("welcome");
    }

    public function sendConfirmationMail($request)
    {
        $ref = bcrypt($request['email']);
        DB::update("update users set verify_token = ? where email = ?", array($ref, $request['email']));
        $ref = env('APP_URL' . 'unicloud.devo') . "/check?ref=" . $ref;
        Mail::send('mail.verify', array('link' => $ref), function ($message) use ($request) {
            $message->to($request['email'], $request['name'])->subject("Welcome to UniCloud");
        });
    }

    public function resendConfirmationMail()
    {
        $this->sendConfirmationMail(auth()->user());
        return redirect("/");
    }

    public function verifyMail(Request $request)
    {
        $users = User::all();
        foreach ($users as $user) {
            echo json_encode($user->hasVerifiedEmail());
        }
//        $results = DB::select("select * from users where verify_token = ?", array($request['ref']));
//        if (count($results) == 1) {
//            DB::update("update users set email_verified_at = NOW(), verify_token = null where verify_token = ?", array($request['ref']));
//        }
//        return redirect("/"); // todo with message?
    }

    public function collectActivity(Request $request) {
        $value = url()->current();
        $value = strstr($value, 'unicloud.devo', false);
        $value = strstr($value, '/', false);
        if ($value == false)
            $value = "Home";
        else $value = substr($value, 1);
        if (auth()->check()){
            $logged_user = auth()->user();
            $mail = $logged_user['email'];
            DB::insert('insert into activity(ip, value, date, user_id) values (?, ?, ?, ?)', [$request->ip(), $value, NOW(), $mail]);

        }else{
            DB::insert('insert into activity(ip, value, date) values (?, ?, ?)', [$request->ip(), $value, NOW()]);
        }
    }

    public function uploadView(Request $request) {
        $this->collectActivity($request);
        return view('upload');
    }

    public function loginView(Request $request){
        $this->collectActivity($request);
        if (auth()->check()) return redirect('/');
        return view("login");
    }

    public function registerView(Request $request){
        $this->collectActivity($request);
        if (auth()->check()) return redirect('/');
        return view("register");
    }

    public function degreesView(Request $request) {
        $this->collectActivity($request);
        //ir buscar à base de dados
        $degreesStr = '';
        $degrees = DB::select('select nome from cursos');

        $degreesSigla = [];
        foreach ($degrees as $degree) {
            $degreesStr = '';
            if (strncmp($degree->nome, "Licenciatura", strlen("Licenciatura")) == 0) {
                $degreesStr .= "Lic. ";
                $degreesStr .= substr($degree->nome, strlen("Licenciatura em"));
            } else if (strncmp($degree->nome, "Mestrado", strlen("Mestrado")) == 0){
                $degreesStr .= "Mes. ";
                $degreesStr .= substr($degree->nome, strlen("Mestrado"));
            }
            array_push($degreesSigla, $degreesStr);
            echo json_encode($degreesSigla);
        }
        //echo json_encode($degreesSigla);*/
        sort($degreesSigla);
        $args_view = array(
            "quartSiglas" => array_chunk($degreesSigla, 4)
        );
        return view('degrees', $args_view);
    }

    /*public function coursesView(Request $request) {
        $this->collectActivity($request);
        //ir buscar à base de dados
        $degreesStr = '';
        $courses = DB::select('select nome from cadeiras');

        $degreesSigla = [];
        foreach ($degrees as $degree) {
            $degreesStr = '';
            for ($j = 0; $j < strlen($degree->nome); $j++) {
                if (ctype_upper($degree->nome[$j])) {
                    $degreesStr .= $degree->nome[$j];
                }
            }
            array_push($degreesSigla, $degreesStr);
        }
        //echo json_encode($degreesSigla);
        sort($degreesSigla);
        $args_view = array(
            "quartSiglas" => array_chunk($degreesSigla, 4)
        );
        return view('degrees', $args_view);
    }*/
}
