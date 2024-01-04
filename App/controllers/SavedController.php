<?php
namespace App\controllers;
require __DIR__ . '/../../vendor/autoload.php';

use App\entities\Immobilier;
use App\models\ImmobilierModel;

class SavedController{


    public function saved(){

        
        include '../../view/acheteur/saved.php'; 
    }

    
}



?>