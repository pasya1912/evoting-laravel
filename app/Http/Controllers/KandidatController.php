<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\KandidatService;

class KandidatController extends Controller
{
    protected $kandidatService;
     public function __construct(KandidatService $kandidatService)
    {
        $this->middleware('auth');
		$this->kandidatService = $kandidatService;
    }
    public function index()
    {
		$data = $this->kandidatService->getKandidat();

    	return view('dashboard/kandidat/kandidatnew',[
    		'osis' => $data['osis'],
			'mpk' => $data['mpk']
    	]);
    }
    public function tambah()
    {
    	return view('dashboard/kandidat/tambahkandidatnew');
    }
    public function store(Request $request)
    {

		$data = $request->validate([
			'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    		'nama'    => 'required',
			'type'    => 'required|in:osis,mpk',
    		'visi'    => 'required',
    		'misi'    => 'required',
			'ketua' => 'required',
			'ketua.*' => 'required',
			'wakil' => 'required',
			'wakil.*' => 'required'
		]);
		$store = $this->kandidatService->storeKandidat($data,$request);

			return redirect('/admin/kandidat');


    }

    public function detail($id,Request $request)
    {

		$detailkandidat = $this->kandidatService->getDetail($id);
    	return view('dashboard/kandidat/kandidatdetailnew',[
            'detailkandidat' => $detailkandidat,
			'idkandidat' => $request->route('id')
        ]);
	}

	public function edit($id)
	{
		$edit = $this->kandidatService->getDetail($id);
		return view('dashboard/kandidat/editkandidatnew',[
			'edit' => $edit
		]);
	}
	public function update($id,Request $request)
	{
			$filter = [
				'nama'    => 'required',
				'type'    => 'required|in:osis,mpk',
				'visi'    => 'required',
				'misi'    => 'required',
				'ketua' => 'required',
				'ketua.*' => 'required',
				'wakil' => 'required',
				'wakil.*' => 'required',
				'gambar' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg'
			];

			
			$data = $request->validate($filter);

			$update = $this->kandidatService->updateKandidat($id,$data,$request);

			return redirect('/admin/kandidat/detail/'.$id);

// 		}
		
	}

	public function hapus($id,Request $request)
	{


			$this->kandidatService->hapusKandidat($id,$request);

			return redirect('/admin/kandidat');
	}
}
