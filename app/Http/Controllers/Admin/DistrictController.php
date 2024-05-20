<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\Tehsil;

use function Laravel\Prompts\alert;

class DistrictController extends Controller
{
      //
    
 public function index()
 {
     $districts = District::all();
     return view('backend.page.district.index', compact('districts'));
 }


 public function getdistrictbycnic($cnic){
   

   
    $districtcode = substr($cnic,1,1);
    $tehsilcode   = substr($cnic,2,1);
    $length       = strlen($cnic);
    $gendercode   = $cnic[$length -1];
    


    $district  = District::where('code', $districtcode)->first();
    $tehsil    = Tehsil::where('code', $tehsilcode)->first();
    $getgender = Gender::where('code', $gendercode)->first();


    return response()->json([

        'district' => $district->name,
        'tehsil'   => $tehsil->name,
        'gender'   => $getgender->name
    ]);


   
 }

 public function create()
 {
    $countries = Country::all();
     return view('backend.page.district.create',compact('countries'));
 }

 public function store(Request $request)
 {
     $request->validate([
         'name'    => 'required|unique:districts,name',
         'code'    => 'required',
         'country' => 'required',
     ]);     
     District::create($request->post());
     return redirect()->route('district.index')->with('success','Created successfully.');
 }

 public function edit($id)

 {

 

    $district = District::where('id', $id)->first();

    $countries = Country::all();
     return view('backend.page.district.edit',compact('district','countries'));
 }

 public function update(Request $request)
 {
    
    $request->validate([
        'name'    => 'required|unique:districts,name',
        'code'    => 'required',
        'country' => 'required',
            
    ]);



 
    $district = District::find($request->id);
    if ($district) {
          // Modify the attributes of the model
        $district->name    = $request->name;
        $district->code    = $request->code;
        $district->country = $request->country;
        
          // Call the save() method to persist the changes
        $district->save();
    }
    

     return redirect()->route('district.index')->with('success','Updated successfully');
 }


 public function delete(Request $request){

    $district = District::find($request->id);

    if ($district) {
      
        $district->delete();
    }

    return redirect()->route('district.index')->with('success','deleted successfully');
 }


 public function fetchDistrict(Request $request)
 {
     $cnic = $request->input('cnic_no');
     dd($cnic);
     
       // Match CNIC number with district code
     $districtCode = substr($cnic, 1, 1);
     
       // Fetch district name based on district code
     $district = District::where('code', $districtCode)->first();

     if ($district) {
         return response()->json(['name' => $district->name]);
     } else {
         return response()->json(['error' => 'District not found'], 404);
     }
 }

}   
