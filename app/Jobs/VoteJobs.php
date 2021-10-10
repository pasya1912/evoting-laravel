<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Pemilih;
use App\Kandidat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;


class VoteJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $jumlahsuara,$idkandidat,$session,$kandidatRepository;
    public function __construct($jumlahsuara,$idkandidat,$session,$kandidatRepository)
    {
        $this->jumlahsuara = $jumlahsuara;
        $this->idkandidat = $idkandidat;
        $this->session = $session;
        $this->kandidatRepository = $kandidatRepository;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try{

            $data = [
                'jumlahsuara' => $this->jumlahsuara+1
            ];
            $this->kandidatRepository->updateWhereId($this->idkandidat,$data);

            }catch(Exception $e){
                Log::error($e->getMessage());
                }
    
    }
}
