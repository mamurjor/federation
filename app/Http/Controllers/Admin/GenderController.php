<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gender;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenderController extends Controller
{
      //
    
    
 public function index()
 {
     $genders = Gender::all();
     return view('backend.page.gender.index', compact('genders'));
 }


 public function create()
 {
     return view('backend.page.gender.create');
 }

 public function store(Request $request)
 {
     $request->validate([
         'name' => 'required',
         'code' => 'required',
     ]);     
     Gender::create($request->post());
     return redirect()->route('gender.index')->with('success','Created successfully.');
 }

 public function edit($id)

 {

      // dd($id);
 

    $genders = Gender::where('id', $id)->first();
       
 
      //$country = Country::where('id',1)->get();

     return view('backend.page.gender.edit',compact('genders'));
 }

 public function update(Request $request)
 {
    
    $request->validate([
        'name' => 'required',
        'code' => 'required',
    ]);



 
    $gender = Gender::find($request->id);
    if ($gender) {
          // Modify the attributes of the model
        $gender->name = $request->name;
        $gender->code = $request->code;
        
          // Call the save() method to persist the changes
        $gender->save();
    }
    

     
    

     return redirect()->route('gender.index')->with('success','Updated successfully');
 }


 public function delete(Request $request){

    $gender = Gender::find($request->id);

    if ($gender) {
      
        $gender->delete();
    }

    return redirect()->route('gender.index')->with('success','deleted successfully');
 }
}
