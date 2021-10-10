<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service\VotingService;
class VotingController extends Controller
{
    protected $votingService;
    
    public function __construct(VotingService $votingService)
    {
        $this->votingService = $votingService;
    }
    public function index(Request $data)
    {
        if(!$data->session()->get('token')){

        return redirect('/voting/login');
    }

        $result = $this->votingService->indexVoting($data);
        return view('voting.index',[
           'status' =>$result['status'],
           'kandidat' => $result['kandidat']
       ]);

 
    }
    public function simpansuara($idkandidat,Request $data)
    {
        if(!$data->session()->get('token')){

       return  response()->json([
                'success' => false,
                'message' => '403 Forbidden'
            ]);
        }
        return $this->votingService->simpanSuara($idkandidat,$data);

    }
    
    public function logoutvoting(Request $data){
        $this->votingService->logout($data);
        return view ('voting.logout');
    }
    
    public function cekStatus(Request $data)
    {

        if(!$data->session()->get('token')){

            return  response()->json([
                    'success' => false,
                    'message' => '403 Forbidden'
                ]);
            }
        return $this->votingService->statusVoting($data);

    }
    
}
