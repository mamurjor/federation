<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Classified;
use Illuminate\Http\Request;
use App\Models\Classifiedcategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClassifiedController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }

  public function classifiedform(){
    $category = Classifiedcategory::all();
    return view('backend.classified.create',compact('category'));
  }

  public function index()
 {
     $classified = Classified::all();
     return view('backend.classified.index', compact('classified'));
 }

  public function indexforadmin()
 {
     $classified = Classified::all();
     return view('backend.classified.indexforadmin', compact('classified'));
 }

 public function approve(Request $request){

  $classified = Classified::find($request->id);
  // dd($classified); 
  $classified->status = 'active';
  $classified->save();

  return redirect()->back()->with('success', 'Classified approved successfully.');
 }


 public function store(Request $request)
 {
        $userId = Auth::id();
        $getuserinfo = User::where('id',$userId)->first();
        $image = $request->file('classifiedimage');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $classifiedimagepath = '/admin/classifiedimage/'.$imageName;
        $image_path =   $image->move(public_path('admin/classifiedimage'), $imageName);

        $request->validate([
          
          'user_id'            => 'required',
          'adid'              => 'required',
          'title'              =>'required',
          'description'              =>'required',
          'category'              => 'required',
          'price'              => 'required',
          'country'              => 'required',
          'district'              => 'required',
          'tehsil'              => 'required',
          'location'              => 'required',
          'email'              => 'required',
          'dateposted'             =>'required',
          'expiredate'              =>'required',
          'condition'              => 'required',
          'keywords'              => 'required',
          'image'              => 'required',

        ]);

//  dd($classifiedimagepath);
     $classified = Classified::create([
         'user_id'            => $userId,
         'adid'              => $request->adid,
         'title'              => $request->title,
         'description'              => $request->description,
         'category'              => $request->category,
         'price'              => $request->price,
         'country'              => $getuserinfo->country_residence,
         'district'              => $getuserinfo->district,
         'tehsil'              => $getuserinfo->tehsil,
         'location'              => $request->location,
         'email'              => $request->email,
         'dateposted'             => Carbon::parse($request->dateposted),
         'expiredate'              => Carbon::parse($request->dateposted),
         'condition'              => $request->condition,
         'keyword'              => $request->keywords,
         'image'              => $classifiedimagepath,
              
     ]);
    
     return redirect()->route('classified.create')->with('success', 'Add Successfull!');
 


}


public function edit($id)

 {

    $classified = Classified::where('id', $id)->first();

     return view('backend.classified.edit',compact('classified'));
 }


public function update(Request $request){
  if($request->hasFile('classifiedimage')){
    $image = $request->file('classifiedimage');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $classifiedimagepath = '/admin/classifiedimage/'.$imageName;
    $image_path =   $image->move(public_path('admin/classifiedimage'), $imageName);
  }

  $request->validate([
          
    'user_id'            => 'required',
    'adid'              => 'required',
    'title'              =>'required',
    'description'              =>'required',
    'category'              => 'required',
    'price'              => 'required',
    'country'              => 'required',
    'district'              => 'required',
    'tehsil'              => 'required',
    'location'              => 'required',
    'email'              => 'required',
    'dateposted'             =>'required',
    'expiredate'              =>'required',
    'condition'              => 'required',
    'keywords'              => 'required',
    'image'              => 'required',

  ]);

  $classified = Classified::find($request->id);

  if($classified){
    $classified->update([
      'adid'              => $request->adid,
      'title'              => $request->title,
      'description'              => $request->description,
      'category'              => $request->category,
      'price'              => $request->price,
      'location'              => $request->location,
      'email'              => $request->email,
      'dateposted'             => Carbon::parse($request->dateposted),
      'expiredate'              => Carbon::parse($request->dateposted),
      'condition'              => $request->condition,
      'keyword'              => $request->keywords,

      'image'              => isset($classifiedimagepath) ? $classifiedimagepath : $classified->image,
    ]);
    
    return redirect()->back()->with('success','Update successfully');
  }
  else{
    return redirect()->back()->with('error','record not found');
  }
}


public function delete(Request $request){

  $classified = Classified::find($request->id);

  if ($classified) {
    
      $classified->delete();
  }

  return redirect()->route('classified.index')->with('success','deleted successfully');
}


// category 

public function categoryindex()
 {
     $classifiedcategory = Classifiedcategory::all();
     return view('frontend.pages.classifiedall.categoryindex', compact('classifiedcategory'));
 }

public function categorycreate(){
  return view('frontend.pages.classifiedall.categorycreate');
}



public function categorystore(Request $request)
 {
     $request->validate([
         'name' => 'required',
         'code' => 'required',       
     ]);     
     Classifiedcategory::create($request->post());
     return redirect()->route('classifiedcategory.index')->with('success','Created successfully.');
 }



 public function categoryedit($id)

 {

    $classifiedcategory = Classifiedcategory::where('id', $id)->first();

     return view('frontend.pages.classifiedall.categoryedit',compact('classifiedcategory'));
 }

 public function categoryupdate(Request $request)
 {
    
    $request->validate([
        'name' => 'required',
        'code' => 'required',       
    ]);

    $classifiedcategory = Classifiedcategory::find($request->id);
    if ($classifiedcategory) {
        // Modify the attributes of the model
        $classifiedcategory->name = $request->name;
        $classifiedcategory->code =  $request->code;
        
        // Call the save() method to persist the changes
        $classifiedcategory->save();
    }
    


     return redirect()->route('classifiedcategory.index')->with('success','Updated successfully');
 }


 public function categorydelete(Request $request){

    $classifiedcategory = Classifiedcategory::find($request->id);

    if ($classifiedcategory) {
      
        $classifiedcategory->delete();
    }

    return redirect()->route('classifiedcategory.index')->with('success','deleted successfully');
 }



}
