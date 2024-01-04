<?php

namespace App\controllers;

require __DIR__ . '/../../vendor/autoload.php';

use App\entities\User;
use App\models\UserModel;

class UserController
{
    public function redirectToSignup()
    {
        include '../../view/auth/signup.php';
    }
    public function redirectToSignin()
    {
        include '../../view/auth/signin.php';
    }


    public function signup()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['cpassword'];

        $userModel = new UserModel();
        $exist = $userModel->getUserByEmail($email);
        if ($exist) {
            $error = 'Username or email has already been taken';
            echo $error;
        } elseif ($password !== $confirmedPassword) {
            $error = 'Passwords do not match';
            echo $error;
        } else {
            $user = new User($username, $email, $password, null, null, null, null, null, 1);
            $userModel->save($user);
            header('location:signin');
        }
    }

    public function signin()
    {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $userModel = new UserModel();
        $userData = $userModel->getUserByEmail($email);

        if ($userData) {
            if (password_verify($password, $userData->getPassword())) {
                $userModel->setUserStatus($email);
                switch ($userData->getRoleId()) {
                    case 1:
                        $_SESSION['isAdmin'] = true;
                        header('location:home');
                        echo 'admin';
                        break;
                    case 10:
                        $_SESSION['isSaler'] = true;

                        echo 'vendeur';
                        break;
                    case 11:
                        $_SESSION['isClient'] = true;
                        echo 'acheteur';
                        break;
                    
                }
            } else {
                echo 'incorrect Password';
            }
        } else {
            echo 'user doesnt exist';
        }
    }
}
