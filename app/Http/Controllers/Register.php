<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Register extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function auth(Request $request) {
        $in = $request->input();
        if (isset($in['signup'])){
            return $this::register($request);
        }else if (isset($in['login'])){
            return $this::login($request);
        }else{
            return view("error", array("error" => "Invalid Action"));
        }
    }

    public function register(Request $request) {
        $in = $request->input();
        if (isset($in['email']) && isset($in['password'])) {
            $email = $in['email'];
            $pass = $in['password'];

            // Verifies if mail is valid
            $validator = Validator::make(['email' => $email], ['email' => 'required|email']);
            if ($validator->fails()){
                return view("error", array("error" => "Invalid email"));
            }

            // Check if email is already on database
            $results = DB::select("select * from user where email = ?", array($email));
            if (count($results) > 0) {
                return view("error", array("error" => "Email already exists!"));
            }

            // Hashing password plus salt (mail)
            $pass = hash("sha512", $email . $pass);

            // If not, insert it
            DB::insert("insert into user (email, password) values(?, ?)", array($email, $pass));
            return "User Insertion Successful";
        }
        return view("error", array("error" => "Missing email or password"));
    }

    public function login(Request $request) {
        $in = $request->input();
        if (isset($in['email']) && isset($in['password'])){
            $email = $in['email'];
            $pass = $in['password'];
            $hash = hash("sha512", $email . $pass);
            $results = DB::select("select * from user where email = ? and password = ?", array($email, $hash));
            if (count($results) == 1) {
                return "Login Successful";
            }
            return view("error", array("error" => "Email or password incorrect"));
        }
        return view("error", array("error" => "Missing email or password"));
    }

    public function mail(Request $request) {
        Mail::send('error', array('error' => "This is a test email"), function ($message) {
            $message->to("rita.lapao00@gmail.com", "Rita Rodrigues")->subject("Test mail");
        });
    }
}
