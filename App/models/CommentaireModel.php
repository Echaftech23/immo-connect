<?php

namespace App\models;

use App\Dao\DaoInterface;
use PDO;
use Exception;
use App\Database\Database;
use App\entities\Commentaire;

class CommentaireModel
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

    public function getAll($id)
    {
        $stmt = $this->getDatabase()->getConnection()->prepare("
            SELECT
                commentaires.id AS commentaire_id,
                commentaires.content,
                commentaires.image,
                commentaires.datePublication,
                users.username AS username,
                immobiliers.title AS immobilier_title
            FROM
                commentaires
            JOIN
                users ON commentaires.user_id = users.id
            JOIN
                immobiliers ON commentaires.immobilier_id = immobiliers.id
            WHERE commentaires.immobilier_id=$id
        ");
        $stmt->execute();
        $commentairesData = $stmt->fetchAll(PDO::FETCH_OBJ);

        $commentaires = [];

        if (empty($commentairesData)) {
            return $commentaires;
        } else {
            foreach ($commentairesData as $commentaireData) {
                $commentaire = new Commentaire(
                    $commentaireData->commentaire_id,
                    $commentaireData->content,
                    $commentaireData->image,
                    $commentaireData->datePubliction,
                    $commentaireData->username,
                    $commentaireData->immobilier_title,
                );
                $commentaires[] = $commentaire;
            }
        }

        return $commentaires;
    }


    public function save($commentaire)
    {
        $stmt = $this->getDatabase()->getConnection()->prepare("
        INSERT INTO commentaires (content, image, datePublication, user_id, immobilier_id)
        VALUES (:content, :image, :datePublication, :user_id, :immobilier_id)
    ");
        $stmt->bindParam(':content', $commentaire->getContent());
        $stmt->bindParam(':image', $commentaire->getImage());
        $stmt->bindParam(':datePublication', $commentaire->getDatePublication());
        $stmt->bindParam(':user_id', $commentaire->getUserId());
        $stmt->bindParam(':immobilier_id', $commentaire->getImmobilierId());

        try {
            $stmt->execute();
            $commentaire->setId($this->getDatabase()->getConnection()->lastInsertId());
            return $commentaire;
        } catch (Exception $e) {
            return false;
        }
    }

    public function update($commentaire)
    {
        $stmt = $this->getDatabase()->getConnection()->prepare("
        UPDATE commentaires
        SET 
            content = :content,
            image = :image,
            datePublication = :datePublication,
            user_id = :user_id,
            immobilier_id = :immobilier_id
        WHERE id = :id
    ");
        $stmt->bindParam(':id', $commentaire->getId());
        $stmt->bindParam(':content', $commentaire->getContent());
        $stmt->bindParam(':image', $commentaire->getImage());
        $stmt->bindParam(':datePublication', $commentaire->getDatePublication());
        $stmt->bindParam(':user_id', $commentaire->getUserId());
        $stmt->bindParam(':immobilier_id', $commentaire->getImmobilierId());

        try {
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function getById($id)
    {
        $stmt = $this->getDatabase()->getConnection()->prepare("
        SELECT
            commentaires.id AS commentaire_id,
            commentaires.content,
            commentaires.image,
            commentaires.datePublication,
            users.username AS username,
            immobiliers.title AS immobilier_title
        FROM
            commentaires
        JOIN
            users ON commentaires.user_id = users.id
        JOIN
            immobiliers ON commentaires.immobilier_id = immobiliers.id
        WHERE commentaires.id = :id
    ");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $commentaireData = $stmt->fetch(PDO::FETCH_OBJ);

        if (empty($commentaireData)) {
            return null;
        } else {
            $commentaire = new Commentaire(
                $commentaireData->commentaire_id,
                $commentaireData->content,
                $commentaireData->image,
                $commentaireData->datePublication,
                null,
                null
            );

            return $commentaire;
        }
    }

    public function deleteById($id)
    {
        $stmt = $this->getDatabase()->getConnection()->prepare("DELETE FROM commentaires WHERE id = :id");
        $stmt->bindParam(':id', $id);

        try {
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
