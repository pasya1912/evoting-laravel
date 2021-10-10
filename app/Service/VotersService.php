<?php
namespace App\Service;

interface VotersService {
    public function getVoters($request);
    public function storeVoters($data);
    public function deleteVoters($data);
    public function exportVoters();

}