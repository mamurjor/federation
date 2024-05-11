<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cast;
use App\Models\Tehsil;
use App\Models\Country;
use App\Models\District;
use App\Models\Classified;
use App\Models\HeroSection;
use App\Models\Matromonial;
use App\Models\sliersection;
use Illuminate\Http\Request;
use App\Models\MissionSection;
use App\Models\Matromonialmarital;
use App\Models\Matromonialreligion;
use App\Http\Controllers\Controller;
use App\Models\Profession;

class MainIndexController extends Controller
{
    public function index(){
        $this->setPageTitle('Home');

        $countries = Country::all();
        $districts = District::all();
        $tehsils = Tehsil::all();
        $casts = Cast::all();

        $HeroSections = HeroSection::all();
        $MissionSections = MissionSection::all();
        $sliersections = sliersection::all();
        


        return view('frontend.pages.home',compact('countries','districts','tehsils','HeroSections','MissionSections','sliersections','casts'));
    }



    public function classified(){
        $classified = Classified::where('status', 'active')->get();
        $allprofession = Profession::all();
        $getalltehsil = Tehsil::all();
        return view('frontend.pages.classifiedall.classifiedall',compact('classified','allprofession','getalltehsil'));
    }

    public function matromonial(){

        $matromonial = Matromonial::where('status', 'active')->get();

        $getalltehsil = Tehsil::all();
        $marital = Matromonialmarital::all();
        $allreligion = Matromonialreligion::all();
        $allcast = Cast::all();
        $allprofession = Profession::all();
        
        return view('frontend.pages.matromonialall.matromonialall',compact('matromonial','getalltehsil','marital','allreligion','allcast','allprofession'));
    }

    public function classifiedaddsingle($id){
        $classifiedsingle = Classified::where('id', $id)->first();
       
        return view('frontend.pages.classifiedall.classfiedsingle',compact('classifiedsingle'));
    }

    public function matromonialsingle($id){
        $matromonialsingle = Matromonial::where('id', $id)->first();
        return view('frontend.pages.matromonialall.matromonialsingle',compact('matromonialsingle'));
    }
   
}
