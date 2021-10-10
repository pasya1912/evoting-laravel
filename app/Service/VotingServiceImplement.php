<?php
namespace App\Service;
use Illuminate\Support\Facades\Cache;
use App\Kandidat;
use App\Voting;
use App\Pemilih;
use App\Jobs\VoteJobs;
use App\Repository\KandidatRepository;
use App\Repository\PemilihRepository;
use Illuminate\Support\Facades\DB;
class VotingServiceImplement implements VotingService
{
    protected $kandidatRepository;
    function __construct(KandidatRepository $kandidatRepository,PemilihRepository $pemilihRepository)
    {
        $this->kandidatRepository = $kandidatRepository;
        $this->pemilihRepository = $pemilihRepository;
    }

    public function indexVoting($data)
    {


            $result = $this->pemilihRepository->whereUsername($data->session()->get('token'),['status_osis','status_mpk'])->first();
            $arr = array("osis"=>$result->status_osis,"mpk"=>$result->status_mpk);

            //Jika Ada Session           
                $kandidat = Cache::remember('getKandidatVoting',now()->addMinutes(5),function(){
                   $osis = array("osis"=>$this->kandidatRepository->getWhereType('osis')->toArray());
                    $mpk = array("mpk"=>$this->kandidatRepository->getWhereType('mpk')->toArray());
                    return array_merge($osis,$mpk);
                });
            return ['status'=>$arr,'kandidat'=>$kandidat];

    }

    public function simpanSuara($idkandidat,$data)
    {


        $jumlah = $this->kandidatRepository->getWhereId($idkandidat);
        $check = $jumlah->exists();
        if(!$check){
            return response()->json([
                'success' => false,
                'message' => 'ID tidak ditemukan'
            ]);
        }


        $jumlahsuara = $jumlah->jumlahsuara;

     $status = ($this->pemilihRepository->whereUsername($data->session()->get('token'),'status_'.$jumlah->type.' as status'))->status;

     if($status == 1){
        return response()->json([
            'success' => false,
            'message' => 'Anda telah memilih !'
        ]);
     }

     $session = $data->session()->get('token');
     dispatch(new VoteJobs($jumlahsuara,$idkandidat,$session,$this->kandidatRepository));
     $this->pemilihRepository->updateWhereUsername($session,[
        'status_'.$jumlah->type => 1
     ]);
     return response()->json([
        'success' => true,
        'message' => 'Vote Berhasil !'
    ]);
    }


    public function logout($data)
    {
        $data->session()->forget('token');
    }
    public function statusVoting($request)
    {
        $result = $this->pemilihRepository->whereUsername($request->session()->get('token'),['status_osis','status_mpk'])->first();
        if($result->status_osis == 2)
        {
            $result->status_osis = false;
        } else if($result->status_osis == 1){
            $result->status_osis = true;
        }

         if($result->status_mpk == 2)
         {

            $result->status_mpk = false;
        } 
        else if($result->status_mpk == 1){
            $result->status_osis = true;
        }
        return response()->json([
            'success' => true,
            'data' => $result->toArray()
        ]);  
    }
}