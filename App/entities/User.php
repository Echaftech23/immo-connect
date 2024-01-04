<?php

namespace App\entities;

class User extends GenericEntity {

    private $username;
    private $email;
    private $password;
    private $image = '';
    private $phone;
    private $rate;
    private $status = 'offline';
    private $isLogin = false;
    private $location_id;
    private $role_id;

    public function __construct($username, $email, $password, $image, $phone, $rate, $status, $isLogin, $location_id, $role_id)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->image = $image;
        $this->phone = $phone;
        $this->rate = $rate;
        $this->status = $status;
        $this->isLogin = $isLogin;
        $this->location_id = $location_id;
        $this->role_id = $role_id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getIsLogin()
    {
        return $this->isLogin;
    }

    public function setIsLogin($isLogin)
    {
        $this->isLogin = $isLogin;
    }

    public function getLocationId()
    {
        return $this->location_id;
    }

    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;
    }

    public function getRoleId()
    {
        return $this->role_id;
    }

    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;
    }
   
}
