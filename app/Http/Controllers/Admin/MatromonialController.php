<?php

namespace App\Http\Controllers\admin;


use Carbon\Carbon;
use App\Models\Cast;
use App\Models\User;
use App\Models\Tehsil;
use App\Models\Profession;
use App\Models\Matromonial;
use Illuminate\Http\Request;
use App\Models\Matromonialmarital;
use App\Events\MatrimonialAdPosted;
use App\Models\Matromonialreligion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MatromonialController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }

  public function matromonialform(){
    $marital = Matromonialmarital::all();
    $religion = Matromonialreligion::all();
    $cast = Cast::all();
    $occupation = Profession::all();
  
    // dd($getuserinfo->country_residence);
    return view('backend.matromonial.create',compact('marital','religion','cast','occupation'));
  }

  public function index()
 {
     $matromonial = Matromonial::all();
     return view('backend.matromonial.index', compact('matromonial'));
 }


 public function indexforadmin()
 {
     $matromonial = Matromonial::all();
     return view('backend.matromonial.indexforadmin', compact('matromonial'));
 }

 public function approve(Request $request){

  $matromonial = Matromonial::find($request->id);
  // dd($matromonial); 
  $matromonial->status = 'active';
  $matromonial->save();

  return redirect()->back()->with('success', 'matromonial approved successfully.');
 }


 public function store(Request $request)
 {
        $userId = Auth::id();
        $getuserinfo = User::where('id',$userId)->first();
        $image = $request->file('matromonialimage');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $matromonialimagepath = '/admin/matromonialimage/'.$imageName;
        $image_path =   $image->move(public_path('admin/matromonialimage'), $imageName);

       
//  dd($matromonialimagepath);
        $request->validate([
         'matromonialid'       => 'required',
         'name'              => 'required',
         'location'              => 'required',
         'height'              => 'required',
         'partnerage' => 'required',
         'partnerlocation' => 'required',
         'partnercompatibility' => 'required',
         'partnercommunication' => 'required',
         'requirment_text' => 'required',
         'buisness_des' => 'required',
         'education'              => 'required',
         'familydetails'              => 'required',
         'income'              => 'required',
         'aboutme'              => 'required',
         'age'              => 'required',
         'email'              => 'required',
         'dateofbirth'             => 'required',
     
        ]);

     $matromonial = Matromonial::create([
         'user_id'              => $userId,
         'matromonialid'              => $request->matromonialid,
         'name'              => $request->name,
         'location'              => $request->location,
         'gender'              => $request->gender,
         'religion'              => $request->religion,
         'marital'              => $request->marital,
         'caste'              => $request->caste,
         'country'              => $getuserinfo->country_residence,
         'district'              => $getuserinfo->district,
         'tehsil'              => $getuserinfo->tehsil,
         'height'              => $request->height,
         'partner_age_range' => $request->partnerage,
         'partner_location' => $request->partnerlocation,
         'partner_compatibility' => $request->partnercompatibility,
         'partner_communication' => $request->partnercommunication,
         'partner_requirment_text' => $request->requirment_text,
         'buisness_des' => $request->buisness_des,
         'education'              => $request->education,
         'familydetails'              => $request->familydetails,
         'occupation'              => $request->occupation,
         'income'              => $request->income,
         'aboutme'              => $request->aboutme,
         'age'              => $request->age,
         'email'              => $request->email,
         'dateofbirth'             => Carbon::parse($request->dateofbirth),
         'matromonialimage'              => $matromonialimagepath,
              
     ]);
     event(new MatrimonialAdPosted($matromonial));
    
     return redirect()->route('matromonial.create')->with('success', 'Add Successfull!');

}

public function edit($id)

 {

    $matromonial = Matromonial::where('id', $id)->first();

     return view('backend.matromonial.edit',compact('matromonial'));
 }


 public function update(Request $request)
 {
     if ($request->hasFile('matromonialimage')) {
         // Handle image upload
         $image = $request->file('matromonialimage');
         $imageName = time() . '.' . $image->getClientOriginalExtension();
         $matromonialimagepath = '/admin/matromonialimage/' . $imageName;
         $image_path = $image->move(public_path('admin/matromonialimage'), $imageName);
     }
 
     $matromonial = Matromonial::find($request->id);

    //  dd($matromonial);

    $request->validate([
        'matromonialid'       => 'required',
        'name'              => 'required',
        'location'              => 'required',
        'height'              => 'required',
        'partnerage' => 'required',
        'partnerlocation' => 'required',
        'partnercompatibility' => 'required',
        'partnercommunication' => 'required',
        'requirment_text' => 'required',
        'buisness_des' => 'required',
        'education'              => 'required',
        'familydetails'              => 'required',
        'income'              => 'required',
        'aboutme'              => 'required',
        'age'              => 'required',
        'email'              => 'required',
        'dateofbirth'             => 'required',
    
       ]);
 
     if ($matromonial) {
         // Update the record
         $matromonial->update([
             'user_id' => $request->userid,
             'matromonialid' => $request->matromonialid,
             'name' => $request->name,
             'location' => $request->location,
             'gender' => $request->gender,
             'religion' => $request->religion,
             'marital' => $request->marital,
             'caste' => $request->caste,
             'height' => $request->height,
             'education' => $request->education,
             'familydetails' => $request->familydetails,
             'occupation' => $request->occupation,
             'income' => $request->income,
             'age' => $request->age,
             'partner_age_range' => $request->partnerage,
             'partner_location' => $request->partnerlocation,
             'partner_compatibility' => $request->partnercompatibility,
             'partner_communication' => $request->partnercommunication,
             'aboutme' => $request->aboutme,
             'partner_requirment_text' => $request->requirment_text,
             'buisness_des' => $request->buisness_des,
             'email' => $request->email,
             'dateofbirth' => Carbon::parse($request->dateofbirth),
             'matromonialimage' => isset($matromonialimagepath) ? $matromonialimagepath : $matromonial->matromonialimage,
         ]);
 
         return redirect()->route('matromonial.index')->with('success', 'Update Successful!');
     } else {
         return redirect()->route('matromonial.index')->with('error', 'Record not found!');
     }
 }


 
 public function delete(Request $request){

  $matromonial = Matromonial::find($request->id);

  if ($matromonial) {
    
      $matromonial->delete();
  }

  return redirect()->route('matromonial.index')->with('success','deleted successfully');
}

// religion

public function religionindex()
 {
     $matromonialreligion = Matromonialreligion::all();
     return view('frontend.pages.matromonialall.religionindex', compact('matromonialreligion'));
 }

public function religioncreate(){
  return view('frontend.pages.matromonialall.religioncreate');
}



public function religionstore(Request $request)
 {
     $request->validate([
         'name' => 'required',
         'code' => 'required',       
     ]);     
     Matromonialreligion::create($request->post());
     return redirect()->route('matromonialreligion.index')->with('success','Created successfully.');
 }



 public function religionedit($id)

 {

    $matromonialreligion = Matromonialreligion::where('id', $id)->first();

     return view('frontend.pages.matromonialall.religionedit',compact('matromonialreligion'));
 }

 public function religionupdate(Request $request)
 {
    
    $request->validate([
        'name' => 'required',
        'code' => 'required',       
    ]);

    $matromonialreligion = Matromonialreligion::find($request->id);
    if ($matromonialreligion) {
        // Modify the attributes of the model
        $matromonialreligion->name = $request->name;
        $matromonialreligion->code =  $request->code;
        
        // Call the save() method to persist the changes
        $matromonialreligion->save();
    }
    


     return redirect()->route('matromonialreligion.index')->with('success','Updated successfully');
 }


 public function religiondelete(Request $request){

    $matromonialreligion = Matromonialreligion::find($request->id);

    if ($matromonialreligion) {
      
        $matromonialreligion->delete();
    }

    return redirect()->route('matromonialreligion.index')->with('success','deleted successfully');
 }


//  marital


public function maritalindex()
 {
     $matromonialmarital = Matromonialmarital::all();
     return view('frontend.pages.matromonialall.maritalindex', compact('matromonialmarital'));
 }

public function maritalcreate(){
  return view('frontend.pages.matromonialall.maritalcreate');
}



public function maritalstore(Request $request)
 {
     $request->validate([
         'name' => 'required',
         'code' => 'required',       
     ]);     
     Matromonialmarital::create($request->post());
     return redirect()->route('matromonialmarital.index')->with('success','Created successfully.');
 }



 public function maritaledit($id)

 {

    $matromonialmarital = Matromonialmarital::where('id', $id)->first();

     return view('frontend.pages.matromonialall.maritaledit',compact('matromonialmarital'));
 }

 public function maritalupdate(Request $request)
 {
    
    $request->validate([
        'name' => 'required',
        'code' => 'required',       
    ]);

    $matromonialmarital = Matromonialmarital::find($request->id);
    if ($matromonialmarital) {
        // Modify the attributes of the model
        $matromonialmarital->name = $request->name;
        $matromonialmarital->code =  $request->code;
        
        // Call the save() method to persist the changes
        $matromonialmarital->save();
    }
    


     return redirect()->route('matromonialmarital.index')->with('success','Updated successfully');
 }


 public function maritaldelete(Request $request){

    $matromonialmarital = Matromonialmarital::find($request->id);

    if ($matromonialmarital) {
      
        $matromonialmarital->delete();
    }

    return redirect()->route('matromonialmarital.index')->with('success','deleted successfully');
 }

 public function getmatromonialbysearch(Request $request){


    $getalltehsil = Tehsil::all();
    $marital = Matromonialmarital::all();
    $allreligion = Matromonialreligion::all();
    $allcast = Cast::all();
    $allprofession = Profession::all();


    $single= $request->Single;
    $religion= $request->religion;
    $caste_sect= $request->caste_sect;
    $profession= $request->profession;

    $matromonial = Matromonial::where('status', 'active')
    ->where('religion',$religion)
    ->where('caste',$caste_sect)
    ->where('occupation',$profession)
    ->where('marital',$single)
    ->get();

    
    return response()->json($matromonial);
    return view('frontend.pages.matromonialall.matromonialall',compact('matromonial','getalltehsil','marital','allreligion','allcast','allprofession'));
 }


//  public function getmatromonialbytehsil(Request $request){
    
//     $checkedValues = $request->input('checkedValues');

  
//     $matromonial = Matromonial::where('status', 'active')
//            ->whereIn('tehsil',$checkedValues)
//            ->get();

//     dd($matromonial);
  

//      return view('frontend.pages.matromonialall.matromonialall',compact('matromonial'));

//  }


public function getTehsilData(Request $request)
{
    $tehsilNames = $request->input('names');

    $tehsilData = Matromonial::where('status', 'active')
    ->whereIn('tehsil', $tehsilNames)->get();

    return response()->json($tehsilData);
}


public function getProfessionData(Request $request)
{
    $professionNames = $request->input('names');

    $professionData = Matromonial::where('status', 'active')
    ->whereIn('occupation', $professionNames)->get();

    return response()->json($professionData);
}


public function getsorteddata(){
    
    $sortedData = Matromonial::orderBy('created_at', 'desc')->get();
    return response()->json($sortedData);
}
}
