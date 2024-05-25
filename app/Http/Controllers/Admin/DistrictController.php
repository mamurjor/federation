<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gender;
use App\Models\Tehsil;
use App\Models\Country;
use App\Models\District;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class DistrictController extends Controller
{
        //
    
 public function index()
 {
     $districts = District::all();
     return view('backend.page.district.index', compact('districts'));
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




// public function getdistrictbycnic($cnic)
// {
//     $districtcode = substr($cnic, 1, 1);
//     $tehsilcode = substr($cnic, 2, 1);
//     $length = strlen($cnic);
//     $gendercode = $cnic[$length - 1];

//     Log::info("CNIC: $cnic, District Code: $districtcode, Tehsil Code: $tehsilcode, Gender Code: $gendercode");

//     $district = District::where('code', $districtcode)->first();
//     $tehsil = Tehsil::where('code', $tehsilcode)->first();
//     $getgender = Gender::where('code', $gendercode)->first();

//     if (!$district || !$tehsil || !$getgender) {
//         return response()->json(['error' => 'Invalid CNIC codes'], 400);
//     }

//     return response()->json([
//         'district' => $district->name,
//         'tehsil' => $tehsil->name,
//         'gender' => $getgender->name
//     ]);
// }




    public function getDistrictByCode($code)
    {
        $district = District::where('code', $code)->first();

        if (!$district) {
            return response()->json(['error' => 'Invalid district code'], 400);
        }
        return response()->json(['district' => $district->name]);
    }

    public function getTehsilByCode($code)
    {
        $tehsil = Tehsil::where('code', $code)->first();

        if (!$tehsil) {
            return response()->json(['error' => 'Invalid tehsil code'], 400);
        }
        return response()->json(['tehsil' => $tehsil->name]);
    }


    public function getGenderByCode($code)
    {
        $gender = Gender::where('code', $code)->first();

        if (!$gender) {
            return response()->json(['error' => 'Invalid gender code'], 400);
        }
        return response()->json(['gender' => $gender->name]);
    }



}   
