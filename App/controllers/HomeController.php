<?php

namespace App\controllers;

require __DIR__ . '/../../vendor/autoload.php';


use App\entities\Immobilier;
use App\models\ImmobilierModel;
use App\models\UserModel;

class HomeController
{
    public function index()
    {

        if (isset($_SESSION["userId"])) {
        $userSId=$_SESSION["userId"];
            $user= new UserModel();
            $userData= $user->getUserById($userSId);
        }
        else {
           $userData=null ;
        }

        include '../../view/index.php'; 
    }
}

