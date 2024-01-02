<?php
namespace App\entities;
class Commentaire {
    private $id;
    private $content;
    private $image;
    private $datePublication;
    private $user_id;
    private $immobilier_id;

    public function __construct($id, $content, $image, $datePublication, $user_id, $immobilier_id) {
        $this->id = $id;
        $this->content = $content;
        $this->image = $image;
        $this->datePublication = $datePublication;
        $this->user_id = $user_id;
        $this->immobilier_id = $immobilier_id;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getDatePublication() {
        return $this->datePublication;
    }

    public function setDatePublication($datePublication) {
        $this->datePublication = $datePublication;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function getImmobilierId() {
        return $this->immobilier_id;
    }

    public function setImmobilierId($immobilier_id) {
        $this->immobilier_id = $immobilier_id;
    }
}
