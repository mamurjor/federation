<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Models\District;
use Illuminate\Http\Request;
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
         'name' => 'required',
         'code' => 'required',       
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
        'name' => 'required',
        'code' => 'required',
        'country' => 'required',
            
    ]);



 
    $district = District::find($request->id);
    if ($district) {
        // Modify the attributes of the model
        $district->name = $request->name;
        $district->code =  $request->code;
        $district->country =  $request->country;
        
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


}
