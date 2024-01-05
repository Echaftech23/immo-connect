<?php

namespace App\controllers;
require __DIR__ . '/../../vendor/autoload.php';

use App\entities\Immobilier;
use App\models\ImmobilierModel;

class HomeController
{
    public function index()
    {


        include '../../view/index.php';
    }
}

