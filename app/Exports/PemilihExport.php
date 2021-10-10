<?php

namespace App\Exports;

use App\Pemilih;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Repository\PemilihRepository;
class PemilihExport implements FromCollection
{
    protected $pemilihRepository;
    function __construct(PemilihRepository $pemilihRepository)
    {
        $this->pemilihRepository = $pemilihRepository;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return $this->pemilihRepository->getAll();
    }
}
