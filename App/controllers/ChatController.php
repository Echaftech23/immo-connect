<?php
namespace App\controllers;

use App\models\MessageModel;
use App\models\UserModel;

class ChatController{

public function index(){
    if (isset($_SESSION["userId"])) {
        $userSId=$_SESSION["userId"];
            $user= new UserModel();
            $userData= $user->getUserById($userSId);
        }
        else {
           $userData=null ;
        }

    $MessageModel= new MessageModel();
 
    $messages=$MessageModel->getMessages(2,3);
    include '../../view/chat/dashboard.php';
}


public function sendMessage()
    {

        $messageModel= new MessageModel();

        $result = $messageModel->insertMessage(3, 2, 'ghizlane');

        if ($result) {
             
            exit();
        } else {

            header("Location: /error");
            exit();
        }
    }

}



?>