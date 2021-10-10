<?php
namespace App\Repository;
interface VotersRepository{
    public function whereToken($token);
    public function insert(Array $data);
}