<?php
namespace App\Repository;
use App\Kandidat;
class KandidatRepositoryImplement implements KandidatRepository{
    public function getWhereType($type,$select = "*")
    {

        return Kandidat::select($select)->where('type',$type)->get();
    }
    public function getWhereId($id)
    {
        return Kandidat::findOrFail($id);

    }
    public function updateWhereId($id,$data)
    {
        return Kandidat::where('id',$id)->update($data);
    }
    public function insert($data)
    {
        return  Kandidat::insert($data);
    }
}