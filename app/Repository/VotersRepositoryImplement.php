<?php
namespace App\Repository;
use App\Voters;
class VotersRepositoryImplement implements VotersRepository{

    public function whereToken($token)
    {
        return Voters::find($token);
        
    }
    public function insert(Array $data)
    {
        return Voters::create($data);
        
    }

}