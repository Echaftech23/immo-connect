<?php
<<<<<<< HEAD
namespace App\controllers;

class VendeurController{

    public function vendeur(){  
        include '../../view/vendeur/Dashboard.php'; 
    }
}

?>
=======

namespace App\controllers;

require __DIR__ . '/../../vendor/autoload.php';

// use App\entities\User;
use App\models\ImmobilierModel;

class VendeurController
{
    public function vendeur()
    {
        include '../../view/vendeur/Dashboard.php';
    }

    public function getImmobilier()
    {
        $id = $_GET['id'];
        $immobilierModel = new ImmobilierModel();
        $immobilier = $immobilierModel->getById($id);

        $commentaireModel = new CommentaireModel();
        $comments = $commentaireModel->getAll($id);
        include '../../view/details.php';
    }
}
>>>>>>> e4fd1091c6ed9c1cb3da389e8059cea15fe4287e
