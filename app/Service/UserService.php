<?php
namespace App\Service;
interface UserService{
    public function cekSession();
    public function login($data,$request);
    public function setPassword($data);



}