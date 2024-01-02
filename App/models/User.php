<?php
use App\Dao\DaoInterface;
use App\entities\User;
class UserModel implements DaoInterface
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
    }

    public function save(User $user)
    {
        $stmt = $this->pdo->prepare("
            INSERT INTO users (username, email, password, image, phone, rate, status, isLogin, location_id, role_id)
            VALUES (:username, :email, :password, :image, :phone, :rate, :status, :isLogin, :location_id, :role_id)
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
            $user->setId($this->pdo->lastInsertId());
            return $user;
        } else {
            return false;
        }
    }

    public function update(User $user)
    {
        $stmt = $this->pdo->prepare("
            UPDATE users
            SET username = :username, email = :email, password = :password, image = :image,
                phone = :phone, rate = :rate, status = :status, isLogin = :isLogin,
                location_id = :location_id, role_id = :role_id
            WHERE id = :id
        ");

        $stmt->bindParam(':id', $user->getId());
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
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetch();
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
