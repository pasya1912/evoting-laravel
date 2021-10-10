<?php
namespace App\Repository;
interface PemilihRepository{
    public function DB();
    public function whereArray($data);
    public function updateWhereUsername($username,$data);
    public function deleteVoted();
    public function deleteNotVoteYet();
    public function deleteAll();
    public function deleteWhereUsername($username);
    public function getAll();
    public function whereUsername($username,$select);
}