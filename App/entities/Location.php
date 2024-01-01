<?php
class Location {
    private $id;
    private $region;
    private $city;
    private $avenue;

    public function __construct($id, $region, $city, $avenue) {
        $this->id = $id;
        $this->region = $region;
        $this->city = $city;
        $this->avenue = $avenue;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getRegion() {
        return $this->region;
    }

    public function setRegion($region) {
        $this->region = $region;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function getAvenue() {
        return $this->avenue;
    }

    public function setAvenue($avenue) {
        $this->avenue = $avenue;
    }
}
