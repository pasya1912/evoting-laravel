<?php

namespace App\Imports;

use App\Voters;
use Maatwebsite\Excel\Concerns\ToModel;

class VotersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Voters([
            'username' => $row[0],
            'password' => $row[1],
            'status_osis' => 2,
            'status_mpk' => 2,
            'password' => null,
            'periode' => 1
        ]);
    }
}
