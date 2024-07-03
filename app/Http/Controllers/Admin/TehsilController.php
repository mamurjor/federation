<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tehsil;
use App\Models\Division;
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

 public function getDivision($Division){
      
        $getuserbyDivision = District::where('division', $Division)->get();
        return response()->json($getuserbyDivision);

 }


    public function getdistrict($Division){
      
        $getdistrict = District::where('division', $Division)->get();
        return response()->json($getdistrict);

    }
    public function gettehsil($district){
      
        $gettehsil = Tehsil::where('district', $district)->get();
        return response()->json($gettehsil);

    }

    
 public function create()
 {
    $divisions = Division::all();
     return view('backend.page.tehsil.create',compact('divisions'));
 }

 public function store(Request $request)
 {
     $request->validate([
         'name'     => 'required|unique:tehsils,name',
         'code'     => 'required',
         'Division'  => 'required',
         'district' => 'required',
     ]);     
     Tehsil::create($request->post());
     return redirect()->route('tehsil.index')->with('success','Created successfully.');
 }

 public function edit($id)

 {

      // dd($id);
 
    $divisions = Division::all();
    // $districts = District::all();
    $tehsils = Tehsil::where('id', $id)->first();
       
 
      //$Division = Division::where('id',1)->get();

     return view('backend.page.tehsil.edit',compact('tehsils','divisions'));
 }

 public function update(Request $request)
 {
    
    $request->validate([
        'name'     => 'required',
        'code'     => 'required',
        'Division'  => 'required',
        'district' => 'required',
    ]);


 
    $tehsil = Tehsil::find($request->id);
    if ($tehsil) {
          // Modify the attributes of the model
        $tehsil->name     = $request->name;
        $tehsil->code     = $request->code;
        $tehsil->Division  = $request->Division;
        $tehsil->district = $request->district;
        
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
