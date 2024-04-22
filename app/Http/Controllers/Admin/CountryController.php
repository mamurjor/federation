<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    //

    
 public function index()
 {
     $countries = Country::all();
     return view('backend.page.country.index', compact('countries'));
 }


 public function create()
 {
     return view('backend.page.country.create');
 }

 public function store(Request $request)
 {
     $request->validate([
         'name' => 'required',
         'code' => 'required',       
     ]);     
     Country::create($request->post());
     return redirect()->route('country.index')->with('success','Created successfully.');
 }

 public function edit($id)

 {

    // dd($id);
 

    $country = Country::where('id', $id)->first();
       
 
    //$country = Country::where('id',1)->get();

     return view('backend.page.country.edit',compact('country'));
 }

 public function update(Request $request)
 {
    
    $request->validate([
        'name' => 'required',
        'code' => 'required',       
    ]);



 
    $country = Country::find($request->id);
    if ($country) {
        // Modify the attributes of the model
        $country->name = $request->name;
        $country->code =  $request->code;
        
        // Call the save() method to persist the changes
        $country->save();
    }
    

     
    

     return redirect()->route('country.index')->with('success','Updated successfully');
 }


 public function delete(Request $request){

    $country = Country::find($request->id);

    if ($country) {
      
        $country->delete();
    }

    return redirect()->route('country.index')->with('success','deleted successfully');
 }


}
