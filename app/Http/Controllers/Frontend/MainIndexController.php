<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cast;
use App\Models\Tehsil;
use App\Models\Country;
use App\Models\District;
use App\Models\HeroSection;
use App\Models\sliersection;
use Illuminate\Http\Request;
use App\Models\MissionSection;
use App\Http\Controllers\Controller;
use App\Models\Classified;
use App\Models\Matromonial;

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
        return view('frontend.pages.classifiedall.classifiedall',compact('classified'));
    }

    public function matromonial(){
        $matromonial = Matromonial::where('status', 'active')->get();
        return view('frontend.pages.matromonialall.matromonialall',compact('matromonial'));
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
