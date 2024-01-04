<?php
namespace App\Dao;

interface Messageinterface
{
    public function getByIdSenderReceiver($sender_id , $receiver_id);
    public function save($entity);
    public function getById($id);
    public function deleteById($id);
    
}