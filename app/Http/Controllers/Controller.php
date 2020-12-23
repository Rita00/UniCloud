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
use function MongoDB\BSON\toJSON;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register(Request $request)
    {
        $this->collectActivity($request);
        $validationRules = [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'terms' => 'required'
        ];
        $validator = Validator::make($request->all(),$validationRules);
        if ($validator->fails()) {
            $message='The name, email or password is missing or accept terms and conditions, please try again';
            return "<script>alert('$message');window.location.href='/register';</script>";
        }
        /*
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        */
        try {
            $user = User::create(request(['name', 'email', 'password']));
        } catch (QueryException $e) {
            $message = 'The provided email is already registered';
            return "<script>alert('$message');window.location.href='/register';</script>";
            /*
            return back()->withErrors([
                'message' => 'The provided email is already registered'
            ]);
            */
        }
        try {
            $this->sendConfirmationMail($request);
        } catch (QueryException $e) {
            $message = 'Confirmation email sending failed';
            return "<script>alert('$message');window.location.href='/register';</script>";
            /*
            return back()->withErrors([
                'message' => 'Confirmation email sending failed'
            ]);
            */
        }
        auth()->login($user);
        return redirect("/");
    }

    public function login(Request $request)
    {
        $this->collectActivity($request);
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
//        echo json_encode($credentials);
        if (auth()->attempt($credentials, $request['remember']) == false) {
            $message = 'The email or password is incorrect, please try again';
            return "<script>alert('$message');window.location.href='/login';</script>";
            /*
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);*/
        }
        return redirect("/");
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->to('/');
    }

    public function home(Request $request)
    {
        $this->collectActivity($request);
        return view("home");
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

    public function collectActivity(Request $request)
    {
        $value = url()->current();
        $value = strstr($value, 'unicloud.devo', false);
        $value = strstr($value, '/', false);
        if ($value == false)
            $value = "Home";
        else $value = substr($value, 1);
        if (auth()->check()) {
            $logged_user = auth()->user();
            $mail = $logged_user['email'];
            DB::insert('insert into activity(ip, value, date, user_id) values (?, ?, ?, ?)', [$request->ip(), $value, NOW(), $mail]);

        } else {
            DB::insert('insert into activity(ip, value, date) values (?, ?, ?)', [$request->ip(), $value, NOW()]);
        }
    }

    public function uploadView(Request $request)
    {
        if ($request->get("course")) {
            $resposta = array("courses" => DB::select('select id, nome, cursoID from cadeiras where cursoID = ? order by nome', array($request->get("course"))));
            return json_encode($resposta);
        } else {
            $this->collectActivity($request);
            $degrees = DB::select('select id, nome from cursos order by nome');
            $args_view = array(
                "degrees" => $degrees,
                "courses" => DB::select('select id, nome, cursoID from cadeiras where cursoID = ? order by nome', array($degrees[0]->id))
            );
            return view('upload', $args_view);
        }
    }

    public function loginView(Request $request)
    {
        $this->collectActivity($request);
        if (auth()->check()) return redirect('/');
        return view("login");
    }

    public function registerView(Request $request)
    {
        $this->collectActivity($request);
        if (auth()->check()) return redirect('/');
        return view("register");
    }
    public function termsView(Request $request)
    {
        $this->collectActivity($request);
        if (auth()->check()) return redirect('/');
        return view("terms");
    }

    public function degreesView(Request $request)
    {
        $this->collectActivity($request);

        $degrees = DB::select('select id, sigla from cursos order by sigla');

        /*$degreesSigla = [];
        $degreeIds = [];
        foreach ($degrees as $degree) {
            array_push($degreesSigla, $degree->sigla);
        }*/
        $args_view = array(
            "quarts" => array_chunk($degrees, 4),
        );
        return view('degrees', $args_view);
    }

    public function coursesView(Request $request)
    {
        $this->collectActivity($request);
        $courses = DB::select('select id, nome from cadeiras where cadeiras.cursoID = ? order by nome', array($request->get("course")));
        $curso = DB::select('select id, nome from cursos where id = ?', array($request->get("course")));
        //printf($curso[0].toJSON());
        $args_view = array(
            "quarts" => array_chunk($courses, 4),
            "curso" => $curso[0],
        );
        return view('courses', $args_view);
    }

    public function materialsListView(Request $request)
    {
        $this->collectActivity($request);
        $courseBread = DB::select('select nome, id, cursoID from cadeiras where cadeiras.id = ?', array($request->get("course")));
        $curso = DB::select('select id, nome from cursos where cursos.id = ?', array($courseBread[0]->cursoID));
        $files = DB::select('select name, sub_category, uploaded_by from files where files.cadeiraID = ? and files.category = ?', array($request->get("course"), $request->get("category")));
        $args_view = array(
            "cat" => $request->get("category"),
            "curso" => $curso[0],
            "courseBread" => $courseBread[0],
            "files" => $files
        );
        return view('materialsList', $args_view);
    }

    public function categoriesView(Request $request)
    {
        $this->collectActivity($request);
        $courseBread = DB::select('select nome, id, cursoID from cadeiras where cadeiras.id = ?', array($request->get("degree")));
        $curso = DB::select('select id, nome from cursos where cursos.id = ?', array($courseBread[0]->cursoID));
        $args_view = array(
            "course" => $request->get("degree"),
            "curso" => $curso[0],
            "courseBread" => $courseBread[0],
        );
        return view('categories', $args_view);
    }
}
