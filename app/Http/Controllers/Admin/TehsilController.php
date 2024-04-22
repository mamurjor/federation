<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tehsil;
use Illuminate\Http\Request;

class TehsilController extends Controller
{
    //
    
    
   
 public function index()
 {
     $tehsils = Tehsil::all();
     return view('backend.page.tehsil.index', compact('tehsils'));
 }


 public function create()
 {
     return view('backend.page.tehsil.create');
 }

 public function store(Request $request)
 {
     $request->validate([
         'name' => 'required',
         'code' => 'required',       
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
    ]);



 
    $tehsil = Tehsil::find($request->id);
    if ($tehsil) {
        // Modify the attributes of the model
        $tehsil->name = $request->name;
        $tehsil->code =  $request->code;
        
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
