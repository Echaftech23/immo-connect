<?php
class Transaction {
    private $id;
    private $details;
    private $user_id;
    private $immobilier_id;

    public function __construct($id, $details, $user_id, $immobilier_id) {
        $this->id = $id;
        $this->details = $details;
        $this->user_id = $user_id;
        $this->immobilier_id = $immobilier_id;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getDetails() {
        return $this->details;
    }

    public function setDetails($details) {
        $this->details = $details;
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
