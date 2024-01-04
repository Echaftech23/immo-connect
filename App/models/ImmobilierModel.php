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
        $stmt = $this->getDatabase()->getConnection()->prepare("SELECT
        immobiliers.id AS immobilier_id,
        immobiliers.title,
        immobiliers.description,
        immobiliers.price,
        immobiliers.image1,
        immobiliers.image2,
        immobiliers.image3,
        immobiliers.image4,
        immobiliers.image5,
        immobiliers.status AS immobilier_status,
        immobiliers.rooms,
        immobiliers.flooring_type,
        immobiliers.bathrooms,
        locations.region ,
        locations.city,
        locations.avenue,
        types.name AS property_type,
        users.username As username
    FROM
        immobiliers
    JOIN locations ON immobiliers.location_id = locations.id
    JOIN types ON immobiliers.type_id = types.id
    JOIN users ON immobiliers.user_id = users.id;
    ");
        $stmt->execute();
        $immobiliersData = $stmt->fetchAll(PDO::FETCH_OBJ);

        $immobiliers = [];

        if (empty($immobiliersData)) {
            return '';
        } else {
            foreach ($immobiliersData as $immobilierData) {
                $immobilier = new Immobilier(
                    $immobilierData->immobilier_id,
                    $immobilierData->title,
                    $immobilierData->description,
                    $immobilierData->price,
                    $immobilierData->image1,
                    $immobilierData->image2,
                    $immobilierData->image3,
                    $immobilierData->image4,
                    $immobilierData->image5,
                    $immobilierData->immobilier_status,
                    $immobilierData->rooms,
                    $immobilierData->flooring_type,
                    $immobilierData->bathrooms,
                    $immobilierData->region . ' ' . $immobilierData->city . ' ' . $immobilierData->avenue,
                    $immobilierData->property_type,
                    $immobilierData->username
                );
                $immobiliers[] = $immobilier;
            }
        }

        return $immobiliers;
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
    public function update($immobilier)
    {
        $stmt = $this->getDatabase()->getConnection()->prepare("
            UPDATE immobiliers
            SET 
                title = :title,
                description = :description,
                price = :price,
                image1 = :image1,
                image2 = :image2,
                image3 = :image3,
                image4 = :image4,
                image5 = :image5,
                status = :status,
                rooms = :rooms,
                flooring_type = :flooring_type,
                bathrooms = :bathrooms,
                location_id = :location_id,
                type_id = :type_id
            WHERE id = :id
        ");
        $stmt->bindParam(':id', $immobilier->getId());
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
            return true;
        } catch (Exception $e) {
            return false;
        }
    }


    public function getById($id)
    {
        $stmt = $this->getDatabase()->getConnection()->prepare("SELECT
    immobiliers.id AS immobilier_id,
    immobiliers.title,
    immobiliers.description,
    immobiliers.price,
    immobiliers.image1,
    immobiliers.image2,
    immobiliers.image3,
    immobiliers.image4,
    immobiliers.image5,
    immobiliers.status AS immobilier_status,
    immobiliers.rooms,
    immobiliers.flooring_type,
    immobiliers.bathrooms,
    locations.region ,
    locations.city,
    locations.avenue,
    types.name AS property_type,
    users.username As username
FROM
    immobiliers
JOIN locations ON immobiliers.location_id = locations.id
JOIN types ON immobiliers.type_id = types.id
JOIN users ON immobiliers.user_id = users.id
WHERE immobiliers.id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $immobilierData = $stmt->fetch(PDO::FETCH_OBJ);

        if (empty($immobilierData)) {
            return null;
        } else {
            $immobilier = new Immobilier(
                $immobilierData->immobilier_id,
                $immobilierData->title,
                $immobilierData->description,
                $immobilierData->price,
                $immobilierData->image1,
                $immobilierData->image2,
                $immobilierData->image3,
                $immobilierData->image4,
                $immobilierData->image5,
                $immobilierData->immobilier_status,
                $immobilierData->rooms,
                $immobilierData->flooring_type,
                $immobilierData->bathrooms,
                $immobilierData->region . ' ' . $immobilierData->city . ' ' . $immobilierData->avenue,
                $immobilierData->property_type,
                $immobilierData->username
            );

            return $immobilier;
        }
    }

    public function deleteById($id)
    {
        $stmt = $this->getDatabase()->getConnection()->prepare("DELETE FROM immobiliers WHERE id = :id");
        $stmt->bindParam(':id', $id);

        try {
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
