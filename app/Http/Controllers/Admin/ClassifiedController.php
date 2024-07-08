<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Classified;
use Illuminate\Http\Request;
use App\Models\AdsNotification;
use App\Models\Classifiedcategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Events\ClassifiedAdSubmitted;

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
     $userId      = Auth::id();
     $getuserinfo = User::where('id', $userId)->first();
     
     $request->validate([
         'adid'           => 'required',
         'title'          => 'required',
         'description'    => 'required',
         'price'          => 'required',
         'location'       => 'required',
         'email'          => 'required',
         'dateposted'     => 'required',
         'expirationdate' => 'required',
         'condition'      => 'required',
         'keywords'       => 'required',
         'video'          => 'required',
        
     ]);
 
       // Store the path of the single classified image
     $classifiedimagepath = '';
     if ($request->hasFile('classifiedimage')) {
         $image               = $request->file('classifiedimage');
         $imageName           = time() . '.' . $image->getClientOriginalExtension();
         $classifiedimagepath = '/admin/classifiedimage/' . $imageName;
         $image->move(public_path('admin/classifiedimage'), $imageName);
     }
 
       // Store the paths of the multiple classified images
     $classifiedimagespaths = [];
     if ($request->hasfile('classifiedimages')) {
         foreach ($request->file('classifiedimages') as $image) {
             $imageName = time() . '_' . $image->getClientOriginalName();
             $path      = '/admin/classifiedimage/' . $imageName;
             $image->move(public_path('admin/classifiedimage'), $imageName);
             $classifiedimagespaths[] = $path;
         }
     }
 
     $classified = Classified::create([
         'user_id'       => $userId,
         'adid'          => $request->adid,
         'title'         => $request->title,
         'description'   => $request->description,
         'category'      => $request->category,
         'price'         => $request->price,
         'video'         => $request->video,
         'Division'       => $getuserinfo->division,
         'district'      => $getuserinfo->district,
         'tehsil'        => $getuserinfo->tehsil,
         'location'      => $request->location,
         'email'         => $request->email,
         'dateposted'    => Carbon::parse($request->dateposted),
         'expiredate'    => Carbon::parse($request->dateposted),
         'condition'     => $request->condition,
         'keyword'       => $request->keywords,
         'image'         => $classifiedimagepath,
         'multipleimage' => json_encode($classifiedimagespaths),
     ]);
 
     event(new ClassifiedAdSubmitted($classified));
     
     return redirect()->route('classified.index')->with('success', 'Add Successful!');
 }
 


public function edit($id)

 {

    $classified = Classified::where('id', $id)->first();

     return view('backend.classified.edit',compact('classified'));
 }


public function update(Request $request){
  if($request->hasFile('classifiedimage')){
    $image               = $request->file('classifiedimage');
    $imageName           = time() . '.' . $image->getClientOriginalExtension();
    $classifiedimagepath = '/admin/classifiedimage/'.$imageName;
    $image_path          = $image->move(public_path('admin/classifiedimage'), $imageName);
  }

  $classifiedimagespaths = [];
  if ($request->hasfile('classifiedimages')) {
      foreach ($request->file('classifiedimages') as $image) {
          $imageName = time() . '_' . $image->getClientOriginalName();
          $path      = '/admin/classifiedimage/' . $imageName;
          $image->move(public_path('admin/classifiedimage'), $imageName);
          $classifiedimagespaths[] = $path;
      }
  }

  $request->validate([
    'adid'           => 'required',
    'title'          => 'required',
    'description'    => 'required',
    'price'          => 'required',
    'location'       => 'required',
    'email'          => 'required',
    'dateposted'     => 'required',
    'expirationdate' => 'required',
    'condition'      => 'required',
    'keywords'       => 'required',
    'video'          => 'required',
   
]);

  $classified = Classified::find($request->id);

  if($classified){
    $classified->update([
      'adid'          => $request->adid,
      'title'         => $request->title,
      'description'   => $request->description,
      'category'      => $request->category,
      'price'         => $request->price,
      'location'      => $request->location,
      'video'         => $request->video,
      'email'         => $request->email,
      'dateposted'    => Carbon::parse($request->dateposted),
      'expiredate'    => Carbon::parse($request->dateposted),
      'condition'     => $request->condition,
      'keyword'       => $request->keywords,
      'image'         => isset($classifiedimagepath) ? $classifiedimagepath : $classified->image,
      'multipleimage' => json_encode($classifiedimagespaths),

    ]);
    
    return redirect()->route('classified.index')->with('success','Update successfully');
  }
  else{
    return redirect()->route('classified.index')->with('error','record not found');
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
         'name' => 'required|unique:classifiedcategories,name',
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
        'name' => 'required|unique:classifiedcategories,name',
        'code' => 'required',
    ]);

    $classifiedcategory = Classifiedcategory::find($request->id);
    if ($classifiedcategory) {
          // Modify the attributes of the model
        $classifiedcategory->name = $request->name;
        $classifiedcategory->code = $request->code;
        
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


 public function getTehsilClassifiedData(Request $request){
  $tehsilNames = $request->input('names');

    $tehsilClassifiedData = Classified::where('status', 'active')
    ->whereIn('tehsil', $tehsilNames)->get();

    return response()->json($tehsilClassifiedData);
 }

 public function getSortedClassifiedData(){
    
  $sortedData = Classified::orderBy('created_at', 'desc')->where('status', 'active')->get();
  return response()->json($sortedData);
}

 public function getsortedclassifieddataAs(){
    
  $sortedDataAs = Classified::orderBy('created_at', 'asc')->where('status', 'active')->get();
  return response()->json($sortedDataAs);
}

 public function getTenClassifiedData(){
    
  $showTenData = Classified::take(10)->get();
  return response()->json($showTenData);
}
 public function getTwentyClassifiedData(){
    
  $showTwentyData = Classified::take(20)->get();
  return response()->json($showTwentyData);
}

public function getTitleData(Request $request){
    
  $query   = $request->input('query');
  // dd($query);
  $results = Classified::where('title', 'LIKE', "%{$query}%")->get();
  return response()->json($results);
}


}
