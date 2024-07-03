<?php

namespace App\Http\Controllers\Admin;

use App\Models\Division;
use App\Models\HeroSection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeroSectionController extends Controller
{
      //

    
   
 public function index()
 {
     $HeroSections = HeroSection::all();
     return view('backend.page.herosection.index', compact('HeroSections'));
 }


 public function create()
 {
     return view('backend.page.herosection.create');
 }

 public function store(Request $request)
 {

    
      $image      = $request->file('sliderimage');
      $imageName  = time() . '.' . $image->getClientOriginalExtension();
      $path       = '/admin/slider/'.$imageName;
      $image_path = $image->move(public_path('admin/slider'), $imageName);
      
  
     $request->validate([
         'title'           => 'required',
         'slogan'          => 'required',
         'button_one_text' => 'required',
         'button_two_text' => 'required',
         'button_one_url'  => 'required',
         'button_two_url'  => 'required',
     ]);     

     $data =[

        'title'           => $request->title,
        'slogan'          => $request->slogan,
        'slug'            => Str::slug($request->title),
        'imageurl'        => $path,
        'button_one_text' => $request->button_one_text,
        'button_one_url'  => $request->button_one_url,
        'button_two_text' => $request->button_two_text,
        'button_two_url'  => $request->button_two_url,
         
        
     ];
  
       //dd($data);
     HeroSection::create($data);
     return redirect()->route('herosection.index')->with('success','Created successfully.');
 }

 public function edit($id)

 {
    
    $HeroSections = HeroSection::where('id', $id)->first();

     return view('backend.page.herosection.edit',compact('HeroSections'));
 }

 public function update(Request $request)
 {
    if ($request->hasFile('sliderimage')) {
        $image      = $request->file('sliderimage');
        $imageName  = time() . '.' . $image->getClientOriginalExtension();
        $path       = '/admin/slider/'.$imageName;
        $image_path = $image->move(public_path('admin/slider'), $imageName);
        
    
       $request->validate([
           'title'           => 'required',
           'slogan'          => 'required',
           'button_one_text' => 'required',
           'button_two_text' => 'required',
           'button_one_url'  => 'required',
           'button_two_url'  => 'required',
       ]);     
    
     
    
     
        $HeroSection = HeroSection::find($request->id);
        if ($HeroSection) {
              // Modify the attributes of the model
            $HeroSection->title           = $request->title;
            $HeroSection->slogan          = $request->slogan;
            $HeroSection->slug            = $request->title;
            $HeroSection->imageurl        = $path;
            $HeroSection->button_one_text = $request->button_one_text;
            $HeroSection->button_one_url  = $request->button_one_url;
            $HeroSection->button_two_text = $request->button_two_text;
            $HeroSection->button_two_url  = $request->button_two_url;
            
            
            $HeroSection->save();
        }

          

    }
    else{
        $request->validate([
            'title'           => 'required',
            'slogan'          => 'required',
            'button_one_text' => 'required',
            'button_one_url'  => 'required',
            'button_two_text' => 'required',
            'button_two_url'  => 'required',
        ]);     
     
     
      
         $HeroSection = HeroSection::find($request->id);
         if ($HeroSection) {
               // Modify the attributes of the model
             $HeroSection->title           = $request->title;
             $HeroSection->slogan          = $request->slogan;
             $HeroSection->slug            = $request->title;
             $HeroSection->button_one_text = $request->button_one_text;
             $HeroSection->button_one_url  = $request->button_one_url;
             $HeroSection->button_two_text = $request->button_two_text;
             $HeroSection->button_two_url  = $request->button_two_url;
             
             
             $HeroSection->save();
         }
    }


     return redirect()->route('herosection.index')->with('success','Updated successfully');
 }


 public function delete(Request $request){

    $HeroSection = HeroSection::find($request->id);

    if ($HeroSection) {
      
        $HeroSection->delete();
    }

    return redirect()->route('herosection.index')->with('success','deleted successfully');
 }
}
