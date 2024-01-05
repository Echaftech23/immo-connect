<?php

namespace App\controllers;

require __DIR__ . '/../../vendor/autoload.php';

use App\entities\User;
use App\models\UserModel;

class UserController
{

    public function signup()
    {

        include '../../view/auth/signup.php';

        if(isset($_POST['signup'])){

            $userModel = new UserModel();
            $user = $userModel->getById(100);

            if ($user !== null && !empty($user->getEmail())) {
                echo "Email Already Registered";
                include '../../view/auth/signup.php';
                exit();
            } else {
                $hashedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $entity = new User($_POST['username'], $_POST['email'], $hashedPassword, NULL, NULL, NULL, NULL, 1, 1);
                $user = new UserModel();
                $user_id = $user->save($entity);

                if ($user_id !== false) {
                    exit(header('location:signin'));

                } else {
                    echo "Something went wrong";
                }
            }
        }
    }

    public function login()
    {
        include '../../view/auth/signin.php';

        $entity = new User($_POST['username'], $_POST['email'], $hashedPassword, NULL, NULL, NULL, NULL, 1, 1);
        $user = new UserModel();
        $user_id = $user->save($entity);

        if ($row) {

            if (password_verify($password, $row['password'])) {
                $_SESSION['auth'] = true;
                $_SESSION['auth_user'] = [
                    'username' => $row['username'],
                    'email' => $row['email'],
                    'id' => $row['id']
                ];

                $_SESSION['message'] = "Logged In Successfully";

                if ($row['role'] === "admin") {
                    $_SESSION['isAdmin'] = true;
                    header('Location: ../../view/admin/dashboard.php');
                }
            } else {
                $_SESSION['message'] = "Password Incorrect";
            }
        } else {
            $_SESSION['message'] = "Invalid Credentials";
        }
    }
}
