<?php
namespace App\Service;
use Illuminate\Support\Facades\DB;
use App\Kandidat;
use Illuminate\Support\Facades\Cache;
use App\Repository\KandidatRepository;

class KandidatServiceImplement implements KandidatService {
    protected $kandidatRepository;
    function __construct(KandidatRepository $kandidatRepository)
    {
        $this->kandidatRepository = $kandidatRepository;

    }
    public function getKandidat()
    {
        try{
        
        $osis = Cache::remember('getKandidatOsis',now()->addSeconds(3),function(){ return $this->kandidatRepository->getWhereType('osis'); });
		$mpk = Cache::remember('getKandidatMpk',now()->addSeconds(3),function(){ return $this->kandidatRepository->getWhereType('mpk'); });

        if($osis == true && $mpk == true){


            return ["osis"=>$osis,'mpk'=>$mpk];
        }else{
            return null;
        }

        }catch(Throwable $e){
            abort(500);
        }
    }

    public function getDetail($id)
    {
        try{
                return $this->kandidatRepository->getWhereId($id);
        }catch(Throwable $e){
            abort(404);
        }
    }
    public function storeKandidat($data, $request)
    {
        try{

		$dataCalon = json_encode(array("ketua" =>$data['ketua'],"wakil" => $data['wakil']));
    	$file = $request->file('gambar');
    	$oriname = $request->file('gambar')->getClientOriginalName();
	
    	$nama_file = time()."_".$oriname;

    	$tujuan = 'foto_kandidat/';
    	$file->move($tujuan,$nama_file);
        $data = [
    		'nama'    => $data['nama'],
			'data'    => $dataCalon,
			'type'    => $data['type'],
    		'visi'    => $data['visi'], //Mengganti garis baru ( \r\n ) dengan tag <br> agar sesuai dengan html
    		'misi'    => $data['misi'],
    		'periode' => 1,
			'foto'    => $nama_file,
			'jumlahsuara' => 0
    	];
        $store = $this->kandidatRepository->insert($data);
        if($store)
        {
			$request->session()->flash('alert', 'Berhasil menambah Kandidat !');
        }else{
            return false;
        }

        }catch(Throwable $e){
            return false;

        }


    }


    public function updateKandidat($id,$data,$request)
    {
        try{
            $dataCalon = json_encode(array("ketua" =>$data['ketua'],"wakil" => $data['wakil']));
            $edit = $this->kandidatRepository->getWhereId($id);
            if(isset($data['gambar']))
            {
            $file = $request->file('gambar');
            $oriname = $request->file('gambar')->getClientOriginalName();
        
            $nama_file = time()."_".$oriname;
    
            $tujuan = 'foto_kandidat/';
            $file->move($tujuan,$nama_file);

 
            unlink($tujuan.$edit->foto); //menghapus foto lama
            $edit->foto = $nama_file;
            }
            $edit->data = $dataCalon;
            $edit->nama = $data['nama'];
            $edit->visi = $data['visi'];
            $edit->misi = $data['misi'];

            if($edit->save())
            {
				$request->session()->flash('alert', 'Berhasil mengupdate detail Kandidat !');
            }
            return  false;

        }catch(Throwable $e)
        {
            $request->session()->flash('alert', 'Something wrong !');
        }



    }


    public function hapusKandidat($id,$request)
    {
        try{
        $kandidat =$this->kandidatRepository->getWhereId($id);
        unlink('foto_kandidat/'.$kandidat->foto);
        if($kandidat->delete())
        {
            $request->session()->flash('alert', 'Berhasil menghapus Kandidat !');
        }

		}catch(Throwable $e)
		{
            $request->session()->flash('alert', 'Something wrong !');
		}
        
    }
}