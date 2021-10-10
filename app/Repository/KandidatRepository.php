<?php
namespace App\Repository;
interface KandidatRepository{
    public function getWhereType($type,$select);
    public function getWhereId($id);
    public function updateWhereId($id,$update);
    public function insert($data);
}