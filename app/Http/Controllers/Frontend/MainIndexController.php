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
}
