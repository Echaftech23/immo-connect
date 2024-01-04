<?php
namespace App\Dao;

interface Chatinterface
{
    public function getByIdSenderReceiver($sender_id , $receiver_id);
    public function save($entity);
    public function getById($id);
    public function deleteById($id);
    
}