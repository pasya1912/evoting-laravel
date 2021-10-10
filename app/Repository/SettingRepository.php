<?php
namespace App\Repository;
interface SettingRepository{
    public function getAll();
    public function updateWhereName($name,$data);
}