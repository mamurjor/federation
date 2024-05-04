<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cast;
use App\Models\Tehsil;
use App\Models\Country;
use App\Models\District;
use App\Models\HeroSection;
use App\Models\sliersection;
use Illuminate\Http\Request;
use App\Models\MissionSection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;

class CountryController extends Controller
{
    //

    
 public function index()
 {
     $countries = Country::all();
     return view('backend.page.country.index', compact('countries'));
 }


 public function GetuserBycontry($country)
 {

    $this->setPageTitle('International');
    $getuserbycountry = User::where('country_residence',$country)->get();
  
    $countries = Country::all();
   
    $districts = District::all();
    $tehsils = Tehsil::all();
    $casts = Cast::all();

    $HeroSections = HeroSection::all();
    $MissionSections = MissionSection::all();
    $sliersections = sliersection::all();
     return view('frontend.pages.homepage.countrylist',compact('getuserbycountry','countries','districts','tehsils','HeroSections','MissionSections','sliersections','casts'));
 }

 public function create()
 {
     return view('backend.page.country.create');
 }

 public function store(Request $request)
 {
     $request->validate([
         'name' => 'required|string|max:255',
         'code' =>  'required|string|max:255',      
     ]);     
     Country::create($request->post());
     return redirect()->route('country.index')->with('success','Created successfully.');
 }

 public function edit($id)

 {

 

    $country = Country::where('id', $id)->first();

     return view('backend.page.country.edit',compact('country'));
 }

 public function update(Request $request)
 {
    
    $request->validate([
        'name' => 'required',
        'code' => 'required',       
    ]);



 
    $country = Country::find($request->id);
    if ($country) {
        // Modify the attributes of the model
        $country->name = $request->name;
        $country->code =  $request->code;
        
        // Call the save() method to persist the changes
        $country->save();
    }
    

     
    

     return redirect()->route('country.index')->with('success','Updated successfully');
 }


 public function delete(Request $request){

    $country = Country::find($request->id);

    if ($country) {
      
        $country->delete();
    }

    return redirect()->route('country.index')->with('success','deleted successfully');
 }


}
