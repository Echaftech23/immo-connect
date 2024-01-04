<?php
namespace App\controllers;
require __DIR__ . '/../../vendor/autoload.php';

use App\entities\Immobilier;
use App\models\CommentaireModel;
use App\models\ImmobilierModel;
use App\models\UserModel;

class ImmobiliersController{

    public function index(){
        
        if (isset($_SESSION["userId"])) {
            $userSId=$_SESSION["userId"];
                $user= new UserModel();
                $userData= $user->getUserById($userSId);
            }
            else {
               $userData=null ;
            }
    
        $immobilierModel= new ImmobilierModel() ;
        $immobiliers=$immobilierModel->getAll();
        
        include '../../view/annoucements.php'; 
    }

    public function getImmobilier(){
        if (isset($_SESSION["userId"])) {
            $userSId=$_SESSION["userId"];
                $user= new UserModel();
                $userData= $user->getUserById($userSId);
            }
            else {
               $userData=null ;
            }
        $id= $_GET['id'];
        $immobilierModel= new ImmobilierModel() ;
        $immobilier=$immobilierModel->getById($id);
        
        $commentaireModel= new CommentaireModel();
        $comments=$commentaireModel->getAll($id);
        include '../../view/details.php';
        
        

    }


}



?>