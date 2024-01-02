<?php

class ImmobilierModel implements UserDaoInterface
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM immobiliers");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Immobiler');
    }

    public function save(User $user)
    {
        // Implement logic to save an immobiler to the database
        $stmt = $this->pdo->prepare("
            INSERT INTO immobiliers (title, description, price, image1, image2, image3, image4, image5, status, rooms, flooring_type, bathrooms, location_id, type_id)
            VALUES (:title, :description, :price, :image1, :image2, :image3, :image4, :image5, :status, :rooms, :flooring_type, :bathrooms, :location_id, :type_id)
        ");

        $stmt->bindParam(':title', $user->getTitle());
        $stmt->bindParam(':description', $user->getDescription());
        $stmt->bindParam(':price', $user->getPrice());
        $stmt->bindParam(':image1', $user->getImage1());
        $stmt->bindParam(':image2', $user->getImage2());
        $stmt->bindParam(':image3', $user->getImage3());
        $stmt->bindParam(':image4', $user->getImage4());
        $stmt->bindParam(':image5', $user->getImage5());
        $stmt->bindParam(':status', $user->getStatus());
        $stmt->bindParam(':rooms', $user->getRooms());
        $stmt->bindParam(':flooring_type', $user->getFlooringType());
        $stmt->bindParam(':bathrooms', $user->getBathrooms());
        $stmt->bindParam(':location_id', $user->getLocationId());
        $stmt->bindParam(':type_id', $user->getTypeId());

        if ($stmt->execute()) {
            $user->setId($this->pdo->lastInsertId());
            return $user;
        } else {
            return false;
        }
    }

    public function update(User $user)
    {
        // Implement logic to update an immobiler in the database
        $stmt = $this->pdo->prepare("
            UPDATE immobiliers
            SET title = :title, description = :description, price = :price, image1 = :image1, image2 = :image2,
                image3 = :image3, image4 = :image4, image5 = :image5, status = :status, rooms = :rooms,
                flooring_type = :flooring_type, bathrooms = :bathrooms, location_id = :location_id, type_id = :type_id
            WHERE id = :id
        ");

        $stmt->bindParam(':id', $user->getId());
        $stmt->bindParam(':title', $user->getTitle());
        $stmt->bindParam(':description', $user->getDescription());
        $stmt->bindParam(':price', $user->getPrice());
        $stmt->bindParam(':image1', $user->getImage1());
        $stmt->bindParam(':image2', $user->getImage2());
        $stmt->bindParam(':image3', $user->getImage3());
        $stmt->bindParam(':image4', $user->getImage4());
        $stmt->bindParam(':image5', $user->getImage5());
        $stmt->bindParam(':status', $user->getStatus());
        $stmt->bindParam(':rooms', $user->getRooms());
        $stmt->bindParam(':flooring_type', $user->getFlooringType());
        $stmt->bindParam(':bathrooms', $user->getBathrooms());
        $stmt->bindParam(':location_id', $user->getLocationId());
        $stmt->bindParam(':type_id', $user->getTypeId());

        if ($stmt->execute()) {
            return $user;
        } else {
            return false;
        }
    }

    public function getById($id)
    {
        // Implement logic to fetch an immobiler by ID from the database
        $stmt = $this->pdo->prepare("SELECT * FROM immobiliers WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Immobiler');
        return $stmt->fetch();
    }

    public function deleteById($id)
    {
        // Implement logic to delete an immobiler by ID from the database
        $user = $this->getById($id);
        if (!$user) {
            return false;
        }

        $stmt = $this->pdo->prepare("DELETE FROM immobiliers WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute() ? $user : false;
    }
}
