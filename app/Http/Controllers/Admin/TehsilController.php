<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tehsil;
use App\Models\Country;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class TehsilController extends Controller
{
    //
    
    
   
 public function index()
 {
     $tehsils = Tehsil::all();
     return view('backend.page.tehsil.index', compact('tehsils'));
 }

 public function getcountry($country){
      
        $getuserbycountry = District::where('country', $country)->get();
       // \Log::info('Cities:', $getuserbycountry->toArray()); // Log the retrieved cities
        return response()->json($getuserbycountry);
       
        

 }


    public function getdistrict($country){
      
        $getdistrict = District::where('country', $country)->get();
        return response()->json($getdistrict);

    }
    public function gettehsil($district){
      
        $gettehsil = Tehsil::where('district', $district)->get();
        return response()->json($gettehsil);

    }

    
 public function create()
 {
    $countries = Country::all();
     return view('backend.page.tehsil.create',compact('countries'));
 }

 public function store(Request $request)
 {
     $request->validate([
         'name' => 'required',
         'code' => 'required',       
         'country' => 'required',       
         'district' => 'required',       
     ]);     
     Tehsil::create($request->post());
     return redirect()->route('tehsil.index')->with('success','Created successfully.');
 }

 public function edit($id)

 {

    // dd($id);
 

    $tehsils = Tehsil::where('id', $id)->first();
       
 
    //$country = Country::where('id',1)->get();

     return view('backend.page.tehsil.edit',compact('tehsils'));
 }

 public function update(Request $request)
 {
    
    $request->validate([
        'name' => 'required',
        'code' => 'required',  
        'country' => 'required',       
         'district' => 'required',     
    ]);



 
    $tehsil = Tehsil::find($request->id);
    if ($tehsil) {
        // Modify the attributes of the model
        $tehsil->name = $request->name;
        $tehsil->code =  $request->code;
        $tehsil->country =  $request->country;
        $tehsil->district =  $request->district;
        
        // Call the save() method to persist the changes
        $tehsil->save();
    }
    

     
    

     return redirect()->route('tehsil.index')->with('success','Updated successfully');
 }


 public function delete(Request $request){

    $tehsil = Tehsil::find($request->id);

    if ($tehsil) {
      
        $tehsil->delete();
    }

    return redirect()->route('tehsil.index')->with('success','deleted successfully');
 }
}
