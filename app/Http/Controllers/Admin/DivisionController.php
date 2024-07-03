<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cast;
use App\Models\User;
use App\Models\Tehsil;
use App\Models\Division;
use App\Models\District;
use App\Models\HeroSection;
use App\Models\sliersection;
use Illuminate\Http\Request;
use App\Models\MissionSection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDivisionRequest;

class DivisionController extends Controller
{
      
 public function index()
 {
     $divisions = Division::all();
     return view('backend.page.division.index', compact('divisions'));
 }


 public function GetuserBycontry($Division)
 {

    $this->setPageTitle('International');
    $getuserbyDivision = User::where('Division_residence',$Division)->get();
  
    $divisions = Division::all();
   
    $districts = District::all();
    $tehsils   = Tehsil::all();
    $casts     = Cast::all();

    $HeroSections    = HeroSection::all();
    $MissionSections = MissionSection::all();
    $sliersections   = sliersection::all();
     return view('frontend.pages.homepage.divisionlist',compact('getuserbyDivision','divisions','districts','tehsils','HeroSections','MissionSections','sliersections','casts'));
 }

 public function create()
 {
     return view('backend.page.division.create');
 }

 public function store(Request $request)
 {
     $request->validate([
         'name' => 'required|string|max:255|unique:divisions,name',
         'code' => 'required|string|max:255',
     ]);     
     Division::create($request->post());
     return redirect()->route('Division.index')->with('success','Created successfully.');
 }

 public function edit($id)

 {

 

    $Division = Division::where('id', $id)->first();

     return view('backend.page.division.edit',compact('Division'));
 }

 public function update(Request $request)
 {
    
    $request->validate([
        'name' => 'required',
        'code' => 'required',
    ]);



 
    $Division = Division::find($request->id);
    if ($Division) {
          // Modify the attributes of the model
        $Division->name = $request->name;
        $Division->code = $request->code;
        
          // Call the save() method to persist the changes
        $Division->save();
    }
    

     
    

     return redirect()->route('Division.index')->with('success','Updated successfully');
 }


 public function delete(Request $request){

    $Division = Division::find($request->id);

    if ($Division) {
      
        $Division->delete();
    }

    return redirect()->route('Division.index')->with('success','deleted successfully');
 }


}
