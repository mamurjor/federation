<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cast;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CastController extends Controller
{
    //

   
 public function index()
 {
     $cast = Cast::all();
     return view('backend.page.cast.index', compact('cast'));
 }


 public function create()
 {
     return view('backend.page.cast.create');
 }

 public function store(Request $request)
 {
     $request->validate([
         'name' => 'required',
         'code' => 'required',

               
     ]);     
   
     Cast::create($request->post());
     return redirect()->route('cast.index')->with('success','Created successfully.');
 }

 public function edit($id)

 {

    // dd($id);
 

    $cast = Cast::where('id', $id)->first();
       
 
    //$country = Country::where('id',1)->get();

     return view('backend.page.cast.edit',compact('cast'));
 }

 public function update(Request $request)
 {
    
    $request->validate([
        'name' => 'required',
        'code' => 'required',       
    ]);



 
    $cast = Cast::find($request->id);
    if ($cast) {
        // Modify the attributes of the model
        $cast->name = $request->name;
        $cast->code =  $request->code;

        
        // Call the save() method to persist the changes
        $cast->save();
    }
    

     
    

     return redirect()->route('cast.index')->with('success','Updated successfully');
 }


 public function delete(Request $request){

    $cast = Cast::find($request->id);

    if ($cast) {
      
        $cast->delete();
    }

    return redirect()->route('cast.index')->with('success','deleted successfully');
 }

}
