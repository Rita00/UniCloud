<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register() {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        try{
            $user = User::create(request(['name', 'email', 'password']));
        }catch (QueryException $e){
                return back()->withErrors([
                    'message' => 'The provided email is already registered'
                ]);
        }
        auth()->login($user);
        return redirect()->to('/');
    }

    public function login() {
        if (auth()->attempt(request(['email', 'password'])) == false) {
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

    public function welcome(){
        return view("welcome");
    }

    public function mail() {
        Mail::send('error', array('error' => "This is a test email"), function ($message) {
            $message->to("rita.lapao00@gmail.com", "Rita Rodrigues")->subject("Test mail");
        });
    }
}
