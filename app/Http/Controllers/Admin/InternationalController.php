<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\International;
use Illuminate\Http\Request;

class InternationalController extends Controller
{
    public function index()
    {
        $international = International::all();
        return view('backend.page.international.index', compact('international'));
    }
     public function create()
    {
        return view('backend.page.international.create');
    }

    public function store(Request $request)
 {
     $request->validate([
         'name' => 'required|string|max:255|unique:divisions,name',
         'code' => 'required|string|max:255',
     ]);     
     International::create($request->post());
     return redirect()->route('international.index')->with('success','Created successfully.');
 }

 public function edit($id)

 {

 

    $international = International::where('id', $id)->first();

     return view('backend.page.international.edit',compact('international'));
 }

 public function update(Request $request)
 {
    
    $request->validate([
        'name' => 'required',
        'code' => 'required',
    ]);



 
    $Division = International::find($request->id);
    if ($Division) {
          // Modify the attributes of the model
        $Division->name = $request->name;
        $Division->code = $request->code;
        
          // Call the save() method to persist the changes
        $Division->save();
    }
    

     
    

     return redirect()->route('international.index')->with('success','Updated successfully');
 }


 public function delete(Request $request){

    $Division = International::find($request->id);

    if ($Division) {
      
        $Division->delete();
    }

    return redirect()->route('international.index')->with('success','deleted successfully');
 }

}
