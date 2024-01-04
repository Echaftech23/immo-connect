<?php

namespace App\models;

require '../../vendor/autoload.php';

use App\Dao\Messageinterface;
use App\database\Database;
use App\entities\Message;
use Exception;
use PDO;

class MessageModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function getMessages($loggedInUserId, $otherUserId)
    {
        $query = "SELECT m.id AS message_id, m.content, m.datePublication, m.status, 
                  sender.username AS sender_name, receiver.username AS receiver_name 
                  FROM messages m 
                  JOIN users sender ON m.sender_id = sender.id 
                  JOIN users receiver ON m.receiver_id = receiver.id 
                  WHERE (m.receiver_id = :loggedInUserId AND m.sender_id = :otherUserId) 
                     OR (m.receiver_id = :otherUserId AND m.sender_id = :loggedInUserId)";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            'loggedInUserId' => $loggedInUserId,
            'otherUserId' => $otherUserId,
        ]);

        $messagesdata = $stmt->fetchAll(PDO::FETCH_OBJ);

        if (empty($messagesdata)) {
            return [];
        } else {
            $messages = [];
            foreach ($messagesdata as $messagedata) {
                $messages[] = new Message($messagedata->message_id, $messagedata->content, $messagedata->datePublication, $messagedata->status, $messagedata->receiver_name, $messagedata->sender_name);
            }
            return $messages;
        }
    }

    public  function insertMessage($senderId, $receiverId, $messageContent)
    {

        $query = "INSERT INTO messages (content, datePublication, status, receiver_id, sender_id) 
                  VALUES (?, NOW(), 'Unread', ?, ?)";
        
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$messageContent, $receiverId, $senderId]);
    }
}
