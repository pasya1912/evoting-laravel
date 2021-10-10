<?php
namespace App\Service;

interface VotingService {
    public function indexVoting($data);
    public function simpanSuara($idkandidat,$data);
    public function logout($data);
    public function statusVoting($request);
}