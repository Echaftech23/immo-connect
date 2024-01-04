<?php

namespace App\models;
use App\Dao\Messageinterface;
use App\entities\Message;
use Exception;
use App\Database\Database, PDO;

class MessageModel implements Messageinterface 
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance() -> getConnection();
    }

    public function getByIdSenderReceiver($sender_id , $receiver_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM messages WHERE sender_id = ? AND receiver_id = ?");
        $stmt->execute(array('sender_id' => $sender_id , 'receiver_id' => $receiver_id));// fi chek tkhdm
        $messages = $stmt->fetchAll(PDO::FETCH_OBJ);
        if ($messages){
            // ($id, $content, $datePublication, $status, $receiver_id, $sender_id)
            $message = new Message($messages->id, $messages->content, $messages->datePublication, $messages->status, $messages->receiver_id, $messages->sender_id);
            return $message;
        }
        return false;
    }


    public function save($messages)
    {
        $stmt = $this->pdo->prepare("INSERT INTO messages (content, datePublication, status, receiver_id, sender_id)
            VALUES (:messages, :datePublication, :status, :receiver_id, :sender_id)
        ");

        $stmt->bindParam(':messages', $messages->getmessages());
        $stmt->bindParam(':datePublication', $messages->getdatePublication());
        $stmt->bindParam(':status', $messages->getstatus());
        $stmt->bindParam(':receiver_id', $messages->getreceiver_id());
        $stmt->bindParam(':sender_id', $messages->getsender_id());
        

        if ($stmt->execute()) {
            $messages->setId($this->pdo->lastInsertId());
            return $messages;
        } else {
            return false;
        }
    }

    public function update($messages)
    {
        $stmt = $this->pdo->prepare("UPDATE messages
            SET status = :status
            WHERE id = :id
        ");

        $stmt->bindParam(':id', $messages->getId());
        $stmt->bindParam(':status', $messages->getstatus());

        if ($stmt->execute()) {
            return $messages;
        } else {
            return false;
        }
    }

    public function getById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM messages WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $messages = $stmt->fetchAll(PDO::FETCH_OBJ);
        if ($messages){
            // ($id, $content, $datePublication, $status, $receiver_id, $sender_id)
            $message = new Message($messages->id, $messages->content, $messages->datePublication, $messages->status, $messages->receiver_id, $messages->sender_id);
            return $message;
        }
        return false;
    }

    public function deleteById($id)
    {
        $messages = $this->getById($id);
        if (!$messages) {
            return false;
        }

        $stmt = $this->pdo->prepare("DELETE FROM messages WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute() ? $messages : false;
    }


}

?>


