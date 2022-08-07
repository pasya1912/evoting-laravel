<?php
namespace App\Service;
use Illuminate\Support\Facades\Cache;
use App\Imports\VotersImport;
//session facades
use Illuminate\Support\Facades\Session;
use App\Repository\PemilihRepository;
use App\Repository\VotersRepository;
use Maatwebsite\Excel\Facades\Excel;
class VotersServiceImplement implements VotersService {
    protected $pemilihRepository,$votersRepository;
           function __construct(PemilihRepository $pemilihRepository,VotersRepository $votersRepository)
    {
			$this->votersRepository = $votersRepository;
            $this->pemilihRepository = $pemilihRepository;
    }
    public function getVoters($request)
    {   try{
		$query = $this->pemilihRepository->DB()->selectRaw('id,username,status_osis as text_osis,status_mpk as text_mpk,password');

        }catch(Throwable $e)
        {
            abort(500);
        }
		if(isset($request['kriteria']) && $request['kriteria'] > 0){
			if($request['kriteria'] == 1){
				$pemilih = $query->where('status_osis',1)->where('status_mpk',1);

			}elseif($request['kriteria'] == 2){
				$pemilih = $query->where('status_osis',2)->where('status_mpk',2);
			}elseif($request['kriteria'] == 3){
				$pemilih = $query->whereNotNull('password');
			}elseif($request['kriteria'] == 4){
				$pemilih = $query->whereNull('password');
			}elseif($request['kriteria'] == 5){
				if(isset($request['token'])){
				$pemilih = $query->where('username',$request['token']);
				}
				else{
					$data->session()->flash('alert', 'Missing parameter `token`');
					$pemilih = $query;
				}
			}else{
				$pemilih = $query;
			}

		}else{
			$pemilih = $query;
		}
		$pemilih = $pemilih->orderBy('id','DESC')->paginate(15);	
        return $pemilih;
    }


    public function storeVoters($data)
    {
        $jumlah = $data['jumlah'];
		if($jumlah > 500)
		{
			\Session::flash('alert', "Jumlah melebihi batas !"); 
			return redirect('/admin/voters');
		}
    	for ($i=0; $i < $jumlah ; $i++) { 
    		# code...
    		$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    		$string   = '';

    		for ($x=0; $x < 8 ; $x++) { 
    			
    			$pos = rand(0, strlen($karakter)-1);
    			$string .= $karakter[$pos]; 

    		}$token = strtoupper($string);
    			/** CEK TOKEN SUDAH TERDAFTAR ATAU BELUM*/
    			$cek = $this->votersRepository->whereToken($token);
			$result = [];
    			if(empty($cek)){
		    		$result[] = $this->votersRepository->insert([
		    			'username' => $token,
		    			'periode'  => 1,
		    			'status_osis'   => 2,
						'status_mpk'   => 2 
					]);
		    }

		
    	}
		Session::flash('created', $i); 
		Session::flash('alert', "Success Create ".$i." Token"); 
			return redirect('/admin/voters');

    }
	//method to import voters from excels
	public function importVoters($data)
	{
		$file = $data->file('file');
		$nama_file = rand().$file->getClientOriginalName();
		$file->move('file_voters',$nama_file);
		Excel::import(new VotersImport, public_path('/file_voters/'.$nama_file));
		Session::flash('alert', "Success Import Voters"); 
		return redirect('/admin/voters');
	}

    public function deleteVoters($data)
    {
        $kriteria = $data['kriteria'];

		if($kriteria == 0){
			
			$this->pemilihRepository->deleteAll();
			return redirect('/admin/voters');
		}else if($kriteria == 1){

			$this->pemilihRepository->deleteVoted();
			return redirect('/admin/voters');
		}else if($kriteria == 2 ){
			$this->pemilihRepository->deleteNotVotedYet();
			return redirect('/admin/voters');
		}
		else if($kriteria == 3 ){
			$token = $data['token'];
				$delete = $this->pemilihRepository->deleteWhereUsername($token);
			if($delete == 1){
				return redirect('/admin/voters')->with('alert','Berhasil Menghapus token !');
			}else{
				return redirect('/admin/voters')->with('alert','Gagal menghapus token !');
			}
		}
    }

    public function exportVoters()
    {

        return Excel::download(new PemilihExport($this->pemilihRepository), 'token.xlsx');
    }
}