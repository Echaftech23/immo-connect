<?php

namespace App\controllers;

require_once '../../vendor/autoload.php';


class AuthController
{

    public function signup()
    {
        include '../../view/auth/signup.php';
        exit();
    }

    public function login()
    {
        include '../../view/auth/signin.php';
        exit();
    }
}
