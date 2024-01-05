<?php

namespace App\controllers;

use App\models\MessageModel;
use App\models\UserModel;

class ChatController
{

    public function index()
    {
        if (isset($_SESSION["userId"])) {
            $userSId = $_SESSION["userId"];
            $user = new UserModel();
            $userData = $user->getUserById($userSId);

           
            $MessageModel = new MessageModel();
            $recievers=$MessageModel->getRecievers($userSId);
            include '../../view/chat/dashboard.php';

        } else {
            $userData = null;
            header('location:signin');
        }
    }
    public function getAll(){
        $user = new UserModel();
            $userData = $user->getUserById($_SESSION["userId"]);
        $MessageModel = new MessageModel();
        $recievers=$MessageModel->getRecievers($_SESSION["userId"]);

        $idReciever=$_GET['id'];
        $messages = $MessageModel->getMessages($_SESSION["userId"],$idReciever);
            include '../../view/chat/dashboard.php';
    }


    public function sendMessage()
    {
        $sender=$_POST['sender_id'];
        $reciever=$_POST['receiver_id'];
        $content=$_POST['message_content'];

        $messageModel = new MessageModel();

        $result = $messageModel->insertMessage($sender, $reciever, $content);
        header("Location: display-messages?id=$reciever");


        if ($result) {

            exit();
        } else {

            header("Location: /error");
            exit();
        }
    }
}
