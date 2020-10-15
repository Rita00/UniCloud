<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Register extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Register(Request $request) {
        $_in = $request->input();
        if (isset($_in['email']) && isset($_in['password'])) {
            return $_in['email'] . " - " . $_in['password'];
        }
        return "reg";
    }
}
