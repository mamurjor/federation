<?php

namespace App\Imports;


use App\Models\Division;
use Maatwebsite\Excel\Concerns\ToModel;

class DivisionImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    { 
        // dd($row);
        return new Division([
           
            'name'     => $row[0],
            'code'    => $row[1], 
        ]);
    }

}
