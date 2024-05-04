<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\CountryExport;

use App\Imports\CountryImport;
use App\Imports\DistrictImport;
use App\Imports\TehsilImport;

use Maatwebsite\Excel\Facades\Excel;

use App\Models\Country;

class ExcelCSVController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function index()
    // {
    //    return view('excel-csv-import');
    // }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExcelCSVCountry(Request $request) 
    {
    	$validatedData = $request->validate([

           'file' => 'required',

        ]);

        Excel::import(new CountryImport,$request->file('file'));
      

           
        return redirect('index')->with('status', 'The file has been excel/csv imported to database in Laravel 10');
    }

    public function importExcelCSVDistrict(Request $request) 
    {
    	$validatedData = $request->validate([

           'file' => 'required',

        ]);

        Excel::import(new DistrictImport,$request->file('file'));
      

           
        return redirect('district/index')->with('status', 'The file has been excel/csv imported to database in Laravel 10');
    }
    public function importExcelCSVTehsil(Request $request) 
    {
    	$validatedData = $request->validate([

           'file' => 'required',

        ]);

        Excel::import(new TehsilImport,$request->file('file'));
      

           
        return redirect('tehsil/index')->with('status', 'The file has been excel/csv imported to database in Laravel 10');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportExcelCSV($slug) 
    {
        return Excel::download(new CountryExport, 'users.'.$slug);
    }
   
}