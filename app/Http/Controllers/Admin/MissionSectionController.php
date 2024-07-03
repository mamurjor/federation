<?php

namespace App\Http\Controllers\Admin;

use App\Models\HeroSection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\MissionSection;
use App\Http\Controllers\Controller;

class MissionSectionController extends Controller
{
      //
    
 public function index()
 {
     $MissionSections = MissionSection::all();
     return view('backend.page.missionsection.index', compact('MissionSections'));
 }


 public function create()
 {
     return view('backend.page.missionsection.create');
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
        'description'     => 'required',
        'button_one_text' => 'required',
        'button_one_url'  => 'required',
        'button_two_url'  => 'required',
        'button_two_text' => 'required',
     ]);     
     
     $data =[

        'title'           => $request->title,
        'slogan'          => $request->slogan,
        'slug'            => Str::slug($request->title),
        'imageurl'        => $path,
        'button_one_text' => $request->button_one_text,
        'description'     => $request->description,
        'button_one_url'  => $request->button_one_url,
        'button_two_text' => $request->button_two_text,
        'button_two_url'  => $request->button_two_url,
        
        
    ];
    
      //dd($data);
    MissionSection::create($data);
    return redirect()->route('missionsection.index')->with('success','Created successfully.');
}

public function edit($id)

{
    
    $missionSections = MissionSection::where('id', $id)->first();
    
    return view('backend.page.missionsection.edit',compact('missionSections'));
}

public function update(Request $request)
{
    
    $request->validate([
       'title'           => 'required',
       'slogan'          => 'required',
       'description'     => 'required',
       'button_one_text' => 'required',
       'button_one_url'  => 'required',
       'button_two_url'  => 'required',
       'button_two_text' => 'required',
    ]);   
    
    
    if ($request->hasFile('sliderimage')) {
        $image      = $request->file('sliderimage');
        $imageName  = time() . '.' . $image->getClientOriginalExtension();
        $path       = '/admin/slider/'.$imageName;
        $image_path = $image->move(public_path('admin/slider'), $imageName);
        
    
     
    
     
    
     
        $missonsestion = MissionSection::find($request->id);
        if ($missonsestion) {
              // Modify the attributes of the model
            $missonsestion->title           = $request->title;
            $missonsestion->slogan          = $request->slogan;
            $missonsestion->slug            = $request->title;
            $missonsestion->imageurl        = $path;
            $missonsestion->button_one_text = $request->button_one_text;
            $missonsestion->description     = $request->description;
            $missonsestion->button_one_url  = $request->button_one_url;
            $missonsestion->button_two_text = $request->button_two_text;
            $missonsestion->button_two_url  = $request->button_two_url;
            
            
            $missonsestion->save();
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
     
     
      
         $missonsestion = MissionSection::find($request->id);
         if ($missonsestion) {
               // Modify the attributes of the model
             $missonsestion->title           = $request->title;
             $missonsestion->slogan          = $request->slogan;
             $missonsestion->slug            = $request->title;
             $missonsestion->button_one_text = $request->button_one_text;
             $missonsestion->description     = $request->description;
             $missonsestion->button_one_url  = $request->button_one_url;
             $missonsestion->button_two_text = $request->button_two_text;
             $missonsestion->button_two_url  = $request->button_two_url;
             
             
             $missonsestion->save();
         }
    }


     return redirect()->route('missionsection.index')->with('success','Updated successfully');
 }


 public function delete(Request $request){

    $missonsestion = MissionSection::find($request->id);

    if ($missonsestion) {
      
        $missonsestion->delete();
    }

    return redirect()->route('missionsection.index')->with('success','deleted successfully');
 }
}
