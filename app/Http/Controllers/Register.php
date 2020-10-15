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

    public function Register() {
        echo json_encode(Request::post());
        if (isset($_POST['email']) && isset($POST['password'])) {
            return $_POST['email'] . " - " . $_POST['password'];
        }
        return "reg";
    }
}
