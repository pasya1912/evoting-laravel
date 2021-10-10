<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\VotersService;
class VotersController extends Controller
{
    protected $votersService;
     public function __construct(VotersService $votersService)
    {
        $this->middleware('auth');
		$this->votersService = $votersService;

    }
    public function index(Request $data)
    {

		$request = $data->validate([
			'kriteria'=>'numeric',
			'token'=>'sometimes|required|max:8'
		]);
		$pemilih = $this->votersService->getVoters($request);

		return view('dashboard/voter/votersnew',['pemilih' => $pemilih ]);
    }
    public function tambah()
    {
    	return view('dashboard/voter/tambahnew');
    }
	/** TAMPILKAN MENU HAPUS */
	public function hapus()
	{
		return view('dashboard/voter/hapusnew');
	}
    public function store(Request $data)
    {
		$data = $data->validate([
			'jumlah' => 'required|numeric|min:1|not_in:0',
		]);
		return $this->votersService->storeVoters($data);

	}
	//hapustoken
	public function delete(Request $data)
	{
		$arr = ['kriteria'=>'numeric'];
		if($data->kriteria == 3){
			$arr['token'] = 'required';
		}

		$data = $data->validate(
			$arr
		);

		return $this->votersService->deleteVoters($data);
	}	

	public function export_excel()
	{
		return $this->votersService->exportVoters();
	}
}
