<?php
namespace App\controllers;

use App\models\UserModel;

require __DIR__ . '/../../vendor/autoload.php';

class TransactionController{

    public function index(){
        
        if (isset($_SESSION["userId"])) {
            $userSId=$_SESSION["userId"];
                $user= new UserModel();
                $userData= $user->getUserById($userSId);
                echo 'you can buy';
            }
            else {
               $userData=null ;
               header('location:signin');
            }
    }




}



?>