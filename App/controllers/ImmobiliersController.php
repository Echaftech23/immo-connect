<?php

namespace App\controllers;
require __DIR__ . '/../../vendor/autoload.php';

use App\entities\Immobilier;
use App\models\CommentaireModel;
use App\models\ImmobilierModel;

class ImmobiliersController
{

    public function index()
    {

        $immobilierModel = new ImmobilierModel();
        $immobiliers = $immobilierModel->getAll();

        include '../../view/annoucements.php';
    }

    public function getImmobilier()
    {
        $id= $_GET['id'];
        $immobilierModel= new ImmobilierModel() ;
        $immobilier=$immobilierModel->getById($id);

        $commentaireModel= new CommentaireModel();
        $comments=$commentaireModel->getAll($id);
        include '../../view/details.php';
    }

    public function vendeur()
    {
        include '../../view/vendeur/Dashboard.php';
        exit();
    }

    public function insertImmobilier()
    {
        $immobilierModel = new ImmobilierModel();
        $entity = new Immobilier($_POST['title'], $_POST['description'], $_POST['price'], $_POST['image1'], NULL, NULL, NULL, NULL, $_POST['status'], $_POST['rooms'], $_POST['flooring_type'], $_POST['bathrooms'], $_POST['location_id'], $_POST['type_id'], $_POST['user_id']);
        $immobilier = $immobilierModel->save($entity);

        include '../../view/vendeur/add-imobilier.php';
        exit();
    }

    public function vendeurImmobilier()
    {
        $immobilierModel = new ImmobilierModel();
        $immobiliers = $immobilierModel->getAll();
        
        include '../../view/vendeur/add-imobilier.php';
        exit();
    }

    public function deleteImmobilier()
    {
        $id = $_GET['id'];
        $immobilierModel = new ImmobilierModel();

        $immobilierModel->deleteById($id);

        header('location:add-imobilier');
        exit();
    }
}
