<?php
namespace App\entities;
class Immobilier {
    private $id;
    private $title;
    private $description;
    private $price;
    private $image1;
    private $image2;
    private $image3;
    private $image4;
    private $image5;
    private $status;
    private $rooms;
    private $flooring_type;
    private $bathrooms;
    private $location_id;
    private $type_id;

    public function __construct($id, $title, $description, $price, $image1, $image2, $image3, $image4, $image5, $status, $rooms, $flooring_type, $bathrooms, $location_id, $type_id) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->image1 = $image1;
        $this->image2 = $image2;
        $this->image3 = $image3;
        $this->image4 = $image4;
        $this->image5 = $image5;
        $this->status = $status;
        $this->rooms = $rooms;
        $this->flooring_type = $flooring_type;
        $this->bathrooms = $bathrooms;
        $this->location_id = $location_id;
        $this->type_id = $type_id;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getImage1() {
        return $this->image1;
    }

    public function setImage1($image1) {
        $this->image1 = $image1;
    }

    public function getImage2() {
        return $this->image2;
    }

    public function setImage2($image2) {
        $this->image2 = $image2;
    }

    public function getImage3() {
        return $this->image3;
    }

    public function setImage3($image3) {
        $this->image3 = $image3;
    }

    public function getImage4() {
        return $this->image4;
    }

    public function setImage4($image4) {
        $this->image4 = $image4;
    }

    public function getImage5() {
        return $this->image5;
    }

    public function setImage5($image5) {
        $this->image5 = $image5;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getRooms() {
        return $this->rooms;
    }

    public function setRooms($rooms) {
        $this->rooms = $rooms;
    }

    public function getFlooringType() {
        return $this->flooring_type;
    }

    public function setFlooringType($flooring_type) {
        $this->flooring_type = $flooring_type;
    }

    public function getBathrooms() {
        return $this->bathrooms;
    }

    public function setBathrooms($bathrooms) {
        $this->bathrooms = $bathrooms;
    }

    public function getLocationId() {
        return $this->location_id;
    }

    public function setLocationId($location_id) {
        $this->location_id = $location_id;
    }

    public function getTypeId() {
        return $this->type_id;
    }

    public function setTypeId($type_id) {
        $this->type_id = $type_id;
    }
}

