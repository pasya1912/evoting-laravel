<?php
namespace App\Repository;
use App\Pemilih;
use Illuminate\Support\Facades\DB;
class PemilihRepositoryImplement implements PemilihRepository{
    protected $db;
           function __construct()
           {
               $this->db = DB::table('pemilih');
           }

    public function DB()
    {
        return $this->db;
    }
    public function WhereArray($data)
    {
        return $this->db->where($data);
    }
    public function updateWhereUsername($username,$data)
    {
        return $this->db->where('username',$username)->update($data);
    }
    public function deleteVoted()
    {
        return $this->db->where('status_osis',1)->where('status_mpk',1)->delete();
    }
    public function deleteNotVoteYet()
    {
        return $this->db->where('status_osis',2)->where('status_mpk',2)->delete();
    }
    public function deleteAll() 
    {
        return $this->db->delete();
    }
    public function deleteWhereUsername($username)
    {
        return $this->db->where('username',$username)->delete();
    }
    public function getAll()
    {
        return $this->db->get();
    }
    public function WhereUsername($username,$select)
    {
        return $this->db->select($select)->where('username',$username)->first();
        
    }
}
