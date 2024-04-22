<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\sliersection;
use Illuminate\Http\Request;
use App\Models\MissionSection;
use App\Http\Controllers\Controller;

class SliersectionController extends Controller
{
    //
      
 public function index()
 {
     $sliersections = sliersection::all();
     return view('backend.page.sliersection.index', compact('sliersections'));
 }


 public function create()
 {
     return view('backend.page.sliersection.create');
 }

 public function store(Request $request)
 {

    
      $image = $request->file('sliderimage');
      $imageName = time() . '.' . $image->getClientOriginalExtension();
      $path = '/admin/slider/'.$imageName;
      $image_path =   $image->move(public_path('admin/slider'), $imageName);
      
  
     $request->validate([
         'title' => 'required',
         'slogan' => 'required',
         'button_text' => 'required',  
         'button_url' => 'required',       
                       
     ]);     

     $data =[

        'title' => $request->title,
         'slogan' => $request->slogan, 
         'slug' =>  Str::slug($request->title),
         'imageurl' => $path,
         'button_text' => $request->button_text,         
         'button_url' => $request->button_url,       
     
         
        
     ];
  
     //dd($data);
     sliersection::create($data);
     return redirect()->route('sliersection.index')->with('success','Created successfully.');
 }

 public function edit($id)

 {
    
    $sliersections = sliersection::where('id', $id)->first();  

     return view('backend.page.sliersection.edit',compact('sliersections'));
 }

 public function update(Request $request)
 {
    if ($request->hasFile('sliderimage')) {
        $image = $request->file('sliderimage');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = '/admin/slider/'.$imageName;
        $image_path =   $image->move(public_path('admin/slider'), $imageName);
        
    
       $request->validate([
           'title' => 'required',
           'slogan' => 'required',       
           'button_text' => 'required',       
           'button_url' => 'required',               
       ]);     
    
     
    
     
        $missonsestion = sliersection::find($request->id);
        if ($missonsestion) {
            // Modify the attributes of the model
            $missonsestion->title = $request->title;
            $missonsestion->slogan =  $request->slogan;
            $missonsestion->slug =  $request->title;
            $missonsestion->imageurl =  $path;
            $missonsestion->button_text =  $request->button_text;         
            $missonsestion->button_url =  $request->button_url;
            
            
            $missonsestion->save();
        }

          

    }
    else{
        $request->validate([
            'title' => 'required',
            'slogan' => 'required',       
            'button_text' => 'required',       
            'button_url' => 'required',               
        ]);      
     
     
      
       
        $missonsestion = sliersection::find($request->id);
        if ($missonsestion) {
            // Modify the attributes of the model
            $missonsestion->title = $request->title;
            $missonsestion->slogan =  $request->slogan;
            $missonsestion->slug =  $request->title;           
            $missonsestion->button_text =  $request->button_text;         
            $missonsestion->button_url =  $request->button_url;
            
            
            $missonsestion->save();
        }
    }


     return redirect()->route('sliersection.index')->with('success','Updated successfully');
 }


 public function delete(Request $request){

    $sliersection = sliersection::find($request->id);

    if ($sliersection) {
      
        $sliersection->delete();
    }

    return redirect()->route('sliersection.index')->with('success','deleted successfully');
 }
}
