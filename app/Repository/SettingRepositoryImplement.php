<?php
namespace App\Repository;
use App\Setting;
use Illuminate\Support\Facades\DB;
class SettingRepositoryImplement implements SettingRepository{

    public function getAll()
    {
        return DB::table('setting')->get();
        
    }
    public function updateWhereName($name,$data)
    {

 
        return DB::table('setting')->where('name',$name)->update($data);
    }

}