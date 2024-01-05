<?php

namespace App\models;

require '../../vendor/autoload.php';

use App\Dao\Messageinterface;
use App\database\Database;
use App\entities\Message;
use App\entities\User;
use Exception;
use PDO;

class MessageModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }

    

    public function getRecievers($loggedInUserId)
{
    $query = "
        SELECT DISTINCT
            u.*
        FROM
            users u
        JOIN
            messages m ON u.id = m.sender_id OR u.id = m.receiver_id
        WHERE
            u.id <> :loggedInUserId
            AND (m.sender_id = :loggedInUserId OR m.receiver_id = :loggedInUserId)
    ";

    $stmt = $this->pdo->prepare($query);
    $stmt->execute([
        'loggedInUserId' => $loggedInUserId,
    ]);

    $usersData = $stmt->fetchAll(PDO::FETCH_OBJ);

    if (empty($usersData)) {
        return [];
    } else {
        $users = [];
        foreach ($usersData as $userData) {
            $users[] = new User($userData->id,$userData->username,$userData->email,$userData->password,$userData->image,$userData->phone,$userData->rate,$userData->status,$userData->location_id,$userData->role_id) ;
                
        }
        return $users;
    }
}

    public function getMessages($loggedInUserId,$reciever)
    {
        $query = "SELECT
        m.id AS message_id,
        m.content,
        m.datePublication,
        m.status,
        s.id AS sender_id,
        s.username AS sender_username,
        r.id AS receiver_id,
        r.username AS receiver_username
    FROM
        messages m
    JOIN
        users s ON m.sender_id = s.id
    JOIN
        users r ON m.receiver_id = r.id
    WHERE
        (m.sender_id = :loggedInUserId OR m.receiver_id = :loggedInUserId)
       AND (m.sender_id = $reciever OR m.receiver_id = $reciever)
    ORDER BY
        m.datePublication
    ";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            'loggedInUserId' => $loggedInUserId,
            
        ]);

        $messagesdata = $stmt->fetchAll(PDO::FETCH_OBJ);

        if (empty($messagesdata)) {
            return [];
        } else {
            $messages = [];
            foreach ($messagesdata as $messagedata) {
                $messages[] = new Message($messagedata->message_id, $messagedata->content, $messagedata->datePublication, $messagedata->status, $messagedata->receiver_username, $messagedata->sender_username);
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
