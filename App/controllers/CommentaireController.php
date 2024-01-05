<?php

namespace App\controllers;

use App\entities\Commentaire;
use App\models\CommentaireModel;
use App\models\UserModel;

require __DIR__ . '/../../vendor/autoload.php';

class CommentaireController{

    public function save(){
        if (isset($_SESSION["userId"])) {
            $userSId=$_SESSION["userId"];
                $user= new UserModel();
                $userData= $user->getUserById($userSId);
           
        $id = null;
        $content = isset($_POST['opinion']) ? htmlspecialchars($_POST['opinion']) : '';
        $image = isset($_POST['file']) ? htmlspecialchars($_POST['file']) : '';
        $datePublication = date('Y-m-d H:i:s');
        $user_id = $_SESSION["userId"] ;
        $immobilier_id = isset($_POST['immobilier_id']) ? htmlspecialchars($_POST['immobilier_id']) : '';

        $commentaire = new Commentaire($id, $content, $image, $datePublication, $user_id, $immobilier_id);
        $commentaireModel = new CommentaireModel();
        $commentaireModel->save($commentaire);
        header("location:annoucement-details?id=$immobilier_id");
    }
    else {
        header('location:signin');
       $userData=null ;
    }
    }
}
?>
