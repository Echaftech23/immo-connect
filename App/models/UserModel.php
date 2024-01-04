<<<<<<< HEAD
=======
<?php

namespace App\models;

use App\Dao\DaoInterface;
use App\entities\User;
use App\database\Database, PDO, Exception;

class UserModel implements DaoInterface 
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }
    

    public function getAll()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        $usersData = $stmt->fetchAll(PDO::FETCH_OBJ);
        if(empty($users)){
            return [];
        }else{
            foreach ($usersData as $userData) {
                $user = new User($userData->username, $userData->email, $userData->password, $userData->image, $userData->phone, $userData->rate, $userData->status, $userData->location_id, $userData->role_id);
            }
        }
        $users[] = $user;
        return $users;
    }

    public function save($user)
    {
        $stmt = $this->pdo->prepare("
            INSERT INTO users (username, email, password, image, phone, rate, status, location_id, role_id)
            VALUES (:username, :email, :password, :image, :phone, :rate, :status, :location_id, :role_id)
        ");

        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $image = $user->getImage();
        $phone = $user->getPhone();
        $rate = $user->getRate();
        $status = $user->getStatus();
        $location_id = $user->getLocationId();
        $role_id = $user->getRoleId();
        
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':rate', $rate);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':location_id', $location_id);
        $stmt->bindParam(':role_id', $role_id);
        try {
            $stmt->execute();
            return $this->pdo->lastInsertId();
        } catch (Exception $e) {
            return false;
        }
    }


    public function update($user)
    {
        $stmt = $this->pdo->prepare("
            UPDATE users
            SET username = :username, email = :email, password = :password, image = :image,
                phone = :phone, rate = :rate, status = :status, isLogin = :isLogin,
                location_id = :location_id, role_id = :role_id
            WHERE id = :id
        ");

        $stmt->bindParam(':username', $user->getUsername());
        $stmt->bindParam(':email', $user->getEmail());
        $stmt->bindParam(':password', $user->getPassword());
        $stmt->bindParam(':image', $user->getImage());
        $stmt->bindParam(':phone', $user->getPhone());
        $stmt->bindParam(':rate', $user->getRate());
        $stmt->bindParam(':status', $user->getStatus());
        $stmt->bindParam(':isLogin', $user->getIsLogin());
        $stmt->bindParam(':location_id', $user->getLocationId());
        $stmt->bindParam(':role_id', $user->getRoleId());

        if ($stmt->execute()) {
            return $user;
        } else {
            return false;
        }
    }

    public function getById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        if ($user) {
            $user = new User($user->id, $user->username, $user->email, $user->password, $user->image, $user->phone, $user->rate, $user->status, $user->location_id, $user->role_id);
            return $user;
        } else {
            return null;
        }
    }

    public function deleteById($id)
    {
        $user = $this->getById($id);
        if (!$user) {
            return false;
        }

        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute() ? $user : false;
    }
}
>>>>>>> 3830c1918e92d39d2d8b155c0ad951c56e9ca097
