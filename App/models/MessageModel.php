<?php

namespace App\models;

use App\Dao\DaoInterface;
use App\Database\Database;
use PDO, PDOException;
use App\entities\User;

class UserModel
{
    private $database;

    public function __construct()
    {
        $this->database = Database::getInstance();
    }

    public function getDatabase()
    {
        return $this->database;
    }
    public function getAll()
    {
        $query = $this->database->getConnection()->query("SELECT users.*, roles.id as role_id, roles.name as role_name 
        FROM `users` 
        LEFT JOIN roles on roles.id=users.role_id  ");
        $userData = $query->fetchAll(PDO::FETCH_ASSOC);
        $users = array();

        if (empty($userData)) {
            return $users;
        } else {
            foreach ($userData as $userRow) {
                $users[] = new User(
                    $userRow['id'],
                    $userRow['username'],
                    $userRow['email'],
                    $userRow['password'],
                    $userRow['image'],
                    $userRow['phone'],
                    $userRow['rate'],
                    $userRow['status'],
                    $userRow['location_id'],
                    $userRow['role_id']
                );
            }
        }

        return $users;
    }

    public function save($user)
    {
        $hashedPassword= password_hash($user->getPassword() ,PASSWORD_DEFAULT);
        $statement = $this->getDatabase()->getConnection()->prepare("INSERT INTO `users` (username, email, password, image, phone, rate, status, location_id, role_id) 
    VALUES (:username, :email, :password, :image, :phone, :rate, :status, :location_id, :role_id)");

        $statement->bindValue(':username', $user->getUsername());
        $statement->bindValue(':email', $user->getEmail());
        $statement->bindValue(':password', $hashedPassword);
        $statement->bindValue(':image', $user->getImage());
        $statement->bindValue(':phone', $user->getPhone());
        $statement->bindValue(':rate', $user->getRate());
        $statement->bindValue(':status', $user->getStatus());
        $statement->bindValue(':location_id', $user->getLocationId());
        $statement->bindValue(':role_id', $user->getRoleId());

        try {
            $statement->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getUserByEmail($email)
    {
        $query = $this->database->getConnection()->prepare("SELECT * FROM `users` WHERE email = :email");
        $query->bindValue(':email', $email);

        try {
            $query->execute();
            $userData = $query->fetch(PDO::FETCH_ASSOC);

            if ($userData) {
                return new User(
                    $userData['id'],
                    $userData['username'],
                    $userData['email'],
                    $userData['password'],
                    $userData['image'],
                    $userData['phone'],
                    $userData['rate'],
                    $userData['status'],
                    $userData['location_id'],
                    $userData['role_id']
                );
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        return null; 
    }
    public function getUserById($id){
        $query = $this->database->getConnection()->prepare("SELECT * FROM `users` WHERE id = :id");
        $query->bindValue(':id', $id);  // Corrected from ':email' to ':id'
    
        try {
            $query->execute();
            $userData = $query->fetch(PDO::FETCH_ASSOC);
    
            if ($userData) {
                return new User(
                    $userData['id'],
                    $userData['username'],
                    $userData['email'],
                    $userData['password'],
                    $userData['image'],
                    $userData['phone'],
                    $userData['rate'],
                    $userData['status'],
                    $userData['location_id'],
                    $userData['role_id']
                );
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    
        return null;
    }
    
    public function setUserStatus($email){
        $query = $this->database->getConnection()->prepare("UPDATE `users` SET `status`='Active' where email=:email");
        $query->bindValue(':email', $email);

    }
}
