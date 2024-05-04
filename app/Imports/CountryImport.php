<?php

namespace App\Imports;


use App\Models\Country;
use Maatwebsite\Excel\Concerns\ToModel;

class CountryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    { 
        // dd($row);
        return new Country([
           
            'name'     => $row[0],
            'code'    => $row[1], 
        ]);
    }

}
