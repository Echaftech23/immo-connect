<?php
namespace App\controllers;
use App\entities\User;
use App\models\UserModel;
require __DIR__ . '/../../vendor/autoload.php';

class AcheteurController{

    public function acheteur(){  
        $userOPJ = new UserModel();
        include '../../view/acheteur/Dashboard.php'; 
    }


}

?>