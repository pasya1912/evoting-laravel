<?php
namespace App\Service;
use Response;
use Illuminate\Support\Facades\Cache;
use App\Repository\KandidatRepository;
use App\Repository\PemilihRepository;

class DashboardServiceImplement implements DashboardService {
    protected $kandidatRepository;
           function __construct(KandidatRepository $kandidatRepository,PemilihRepository $pemilihRepository)
           {
               $this->kandidatRepository = $kandidatRepository;
               $this->pemilihRepository = $pemilihRepository;

           }
    public function checkType($request){
        if(isset($request->type))
        {
            $type = $request->type;
            if(preg_match('/^osis$/i',$request->type))
            {
                $type = "osis";
            }
            else if(preg_match('/^mpk$/i',$type))
            {
                $type = "mpk";

            }else{

                abort(400);
            }
        }else{

            abort(400);
        }
    }
    public function ApiDashboard($request)
    {
        $this->checkType($request);
        $type = $request->type;
        $data = Cache::remember('dataDashboard',now()->addMinutes(5),function() use($type)
        {
            return  $this->pemilihRepository->DB()
                    ->selectRaw('(SELECT count(status_'.$type.') FROM `pemilih` WHERE pemilih.status_'.$type.' = \'2\' GROUP BY `status_'.$type.'` )as getBelumVoting')
                    ->selectRaw('(SELECT count(kandidat.nama) FROM `kandidat` WHERE type = "'.$type.'") as getKandidat')
                    ->selectRaw('(SELECT count(username) FROM `pemilih`) as getJumlahHaksuara')
                    ->selectRaw('(SELECT count(*) FROM `pemilih` where status_'.$type.' = 1) as getSuaraMasuk')
                    ->groupBy('getJumlahHakSuara')
                    ->first();
        });
        if(!empty($data)){
        $datas = array(
    		'jumlahhaksuara' => $data->getJumlahHaksuara,
            'jumlahkandidat' => $data->getKandidat,
            'belumvoting'    => $data->getBelumVoting,
            'suaramasuk'     => $data->getSuaraMasuk
        );
             return $datas;
        }else
        {
            return ['success'=>false];
        }
    }

    public function Chart($request){
        $this->checkType($request);
        $type = $request->type;

        $jumlahsuara   = Cache::remember('getJumlahSuara',now()->addMinutes(5),function() use ($type){
            return $this->kandidatRepository->getWhereType($type,['nama','jumlahsuara']);
        });
        $array = [];

             $count = count($jumlahsuara);
             if($count){
             for($i=0;$i<$count;$i++)
             {

                 $array[$i] = array('name' => $jumlahsuara[$i]->nama,'y' => (int)$jumlahsuara[$i]->jumlahsuara,'drilldown' =>$jumlahsuara[$i]->nama);
             }
             return $array;
            }else{
                http_response_code(500); 
                return ['success'=>'false'];
            }
    }
}