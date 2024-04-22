<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profession;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfessionController extends Controller
{
    //
    
 public function index()
 {
     $professions = Profession::all();
     return view('backend.page.cast.index', compact('professions'));
 }


 public function create()
 {
     return view('backend.page.profession.create');
 }

 public function store(Request $request)
 {
     $request->validate([
         'name' => 'required',
         'code' => 'required',       
     ]);     
     Profession::create($request->post());
     return redirect()->route('profession.index')->with('success','Created successfully.');
 }

 public function edit($id)

 {

    // dd($id);
 

    $professions = Profession::where('id', $id)->first();
       
 
    //$country = Country::where('id',1)->get();

     return view('backend.page.profession.edit',compact('professions'));
 }

 public function update(Request $request)
 {
    
    $request->validate([
        'name' => 'required',
        'code' => 'required',       
    ]);



 
    $profession = Profession::find($request->id);
    if ($profession) {
        // Modify the attributes of the model
        $profession->name = $request->name;
        $profession->code =  $request->code;
        
        // Call the save() method to persist the changes
        $profession->save();
    }
    

     
    

     return redirect()->route('profession.index')->with('success','Updated successfully');
 }


 public function delete(Request $request){

    $profession = Profession::find($request->id);

    if ($profession) {
      
        $profession->delete();
    }

    return redirect()->route('profession.index')->with('success','deleted successfully');
 }
}
