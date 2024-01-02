<?php
namespace App\entities;

class Saved {
    private $user_id;
    private $immobilier_id;

    public function __construct($user_id, $immobilier_id) {
        $this->user_id = $user_id;
        $this->immobilier_id = $immobilier_id;
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
