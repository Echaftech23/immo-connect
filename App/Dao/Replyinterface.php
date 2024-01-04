<?php


interface Replyinterface
{

    public function getByIdMessage($message_id);
    public function save($entity);
    public function getById($id);
    public function deleteById($id);
}
