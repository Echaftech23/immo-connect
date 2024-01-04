<<<<<<< HEAD
=======
<?php

namespace App\models;

use App\Dao\DaoInterface;
use PDO;
use Exception;
use App\Database\Database;
use App\Entities\Immobilier;

class ImmobilierModel implements DaoInterface
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
        $stmt = $this->getDatabase()->getConnection()->prepare("SELECT * FROM immobiliers");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'App\Entities\Immobilier');
    }

    public function save($immobilier)
    {
        $stmt = $this->getDatabase()->getConnection()->prepare("
            INSERT INTO immobiliers (title, description, price, image1, image2, image3, image4, image5, status, rooms, flooring_type, bathrooms, location_id, type_id)
            VALUES (:title, :description, :price, :image1, :image2, :image3, :image4, :image5, :status, :rooms, :flooring_type, :bathrooms, :location_id, :type_id)
        ");
        $stmt->bindParam(':title', $immobilier->getTitle());
        $stmt->bindParam(':description', $immobilier->getDescription());
        $stmt->bindParam(':price', $immobilier->getPrice());
        $stmt->bindParam(':image1', $immobilier->getImage1());
        $stmt->bindParam(':image2', $immobilier->getImage2());
        $stmt->bindParam(':image3', $immobilier->getImage3());
        $stmt->bindParam(':image4', $immobilier->getImage4());
        $stmt->bindParam(':image5', $immobilier->getImage5());
        $stmt->bindParam(':status', $immobilier->getStatus());
        $stmt->bindParam(':rooms', $immobilier->getRooms());
        $stmt->bindParam(':flooring_type', $immobilier->getFlooringType());
        $stmt->bindParam(':bathrooms', $immobilier->getBathrooms());
        $stmt->bindParam(':location_id', $immobilier->getLocationId());
        $stmt->bindParam(':type_id', $immobilier->getTypeId());

        try {
            $stmt->execute();
            $immobilier->setId($this->getDatabase()->getConnection()->lastInsertId());
            return $immobilier;
        } catch (Exception $e) {
            return false;
        }
    }
    public function update($entity)
    {
    }
    public function getById($id)
    {
    }
    public function deleteById($id)
    {
    }
}
>>>>>>> 3830c1918e92d39d2d8b155c0ad951c56e9ca097
