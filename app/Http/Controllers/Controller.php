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
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register(Request $request)
    {
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

    public function login(Request $request)
    {
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

    public function welcome()
    {
        return view("welcome");
    }

    public function sendConfirmationMail($request)
    {
        $ref = bcrypt($request['email']);
        DB::update("update users set verify_token = ? where email = ?", array($ref, $request['email']));
        $ref = env('APP_URL'. 'unicloud.devo') . "/check?ref=" . $ref;
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
        foreach ($users as $user){
            echo json_encode($user->hasVerifiedEmail());
        }
//        $results = DB::select("select * from users where verify_token = ?", array($request['ref']));
//        if (count($results) == 1) {
//            DB::update("update users set email_verified_at = NOW(), verify_token = null where verify_token = ?", array($request['ref']));
//        }
//        return redirect("/"); // todo with message?
    }
}
