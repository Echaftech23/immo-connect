<?php
namespace App\controllers;
require __DIR__ . '/../../vendor/autoload.php';

use App\entities\Immobilier;
use App\models\CommentaireModel;
use App\models\ImmobilierModel;

class ImmobiliersController{

    public function index(){
        
        $immobilierModel= new ImmobilierModel() ;
        $immobiliers=$immobilierModel->getAll();
        
        include '../../view/annoucements.php'; 
    }

    public function getImmobilier(){
        $id= $_GET['id'];
        $immobilierModel= new ImmobilierModel() ;
        $immobilier=$immobilierModel->getById($id);
        
        $commentaireModel= new CommentaireModel();
        $comments=$commentaireModel->getAll($id);
        include '../../view/details.php';
        
        

    }


}



?>