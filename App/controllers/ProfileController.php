<?php
namespace App\controllers;
require __DIR__ . '/../../vendor/autoload.php';

use App\entities\Immobilier;
use App\models\ImmobilierModel;

class ProfileController{
    public function Profile(){

        
        include '../../view/profile/profile.php'; 
    }
}



?>