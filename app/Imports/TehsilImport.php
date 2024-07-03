<?php

namespace App\Imports;

use App\Models\Tehsil;
use Maatwebsite\Excel\Concerns\ToModel;

class TehsilImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tehsil([
            'name'     => $row[0],
            'Division'     => $row[1],
            'district'     => $row[2],
            'code'    => $row[3], 
        ]);
    }
}
