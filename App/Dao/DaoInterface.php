<?php

namespace App\Dao;
use App\entities\GenericEntity;
interface DaoInterface
{
    public function getAll();
    public function save($entity);
    public function update($entity);
    public function getById($id);
    public function deleteById($id);
}