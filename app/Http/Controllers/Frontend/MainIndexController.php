<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cast;
use App\Models\Tehsil;
use App\Models\Division;
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
use App\Models\Blogcategories;
use App\Models\BlogPost;
use App\Models\Profession;
use App\Models\User;
use App\Models\VoteResult;

class MainIndexController extends Controller
{
    public function index(){
        $this->setPageTitle('Home');

        $districts = District::all();
        $tehsils   = Tehsil::all();
        $casts     = Cast::all();

        $HeroSections    = HeroSection::all();
        $MissionSections = MissionSection::all();
        $sliersections   = sliersection::all();
        $matromonial = Matromonial::where('status', 'active')->take(8)->get();
        $classified = Classified::where('status', 'active')->take(8)->get();

        // $voteresult = VoteResult::where('status', '1')->with(['nomini.user'])->get();
        // // dd($voteresult);
        // $uniqueUserResults = $voteresult->unique(function ($item) {
        //     return $item->nomini->user->id;
        // });
        return view('frontend.pages.home',compact('districts','tehsils','HeroSections','MissionSections','sliersections','casts','matromonial','classified'));
    }



    public function classified(){
        $classified    = Classified::where('status', 'active')->paginate(5);
        $allprofession = Profession::all();
        $getalltehsil  = Tehsil::all();
        return view('frontend.pages.classifiedall.classifiedall',compact('classified','allprofession','getalltehsil'));
    }

    public function matromonial(){

        $matromonial = Matromonial::where('status', 'active')->paginate(5);

        $getalltehsil  = Tehsil::all();
        $marital       = Matromonialmarital::all();
        $allreligion   = Matromonialreligion::all();
        $allcast       = Cast::all();
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


    public function blog(){
        $blogpost = BlogPost::all();

        foreach($blogpost as $post){
            $userID = $post->user_id;
        }
        $user = User::where('id', $userID)->first();
        return view('backend.blog.blog',compact('blogpost', 'user'));
    }

   


    public function blogsingle($id){
        $singleblog = BlogPost::where('id', $id)->first();
        $user       = User::where('id', $singleblog->user_id)->first();
        $category   = Blogcategories::where('id', $singleblog->category_id)->first();
        return view('backend.blog.singleblog',compact('singleblog','user','category'));
    }


    public function cast(){
        
        $castpost = Cast::all();
        return view('backend.cast.cast',compact('castpost'));
    }

    public function castsingle($id){
        $singlecast = Cast::where('id', $id)->first();
 
        return view('backend.cast.singlecast',compact('singlecast'));
    }

    // contact 
    public function contact(){
        return view('backend.contact.contact');
    }

    // aboutUs 
    public function aboutUS(){
        return view('backend.aboutUs.aboutUs');
    }
    
    public function showTehsil($tehsil){
        // $divisions = Division::all();
        $voteresult = VoteResult::where('status', '1')->with(['nomini.user'])->get();
        $uniqueUserResults = $voteresult->unique(function ($item) {
            return $item->nomini->user->id;
        });
        $blogpost = BlogPost::where('tehsil',$tehsil)->get();
        $tehsilUser = User::where('tehsil', $tehsil)->paginate(6);
        $tehsilData = Tehsil::where('name', $tehsil)->first();
        return view('tehsil.show', compact('tehsilData','uniqueUserResults','blogpost','tehsilUser'));
    }
    public function showwings($wings){
        // $divisions = Division::all();
        $voteresult = VoteResult::where('status', '1')->with(['nomini.user'])->get();
        $uniqueUserResults = $voteresult->unique(function ($item) {
            return $item->nomini->user->id;
        });

        return view('wings.show', compact('tehsilData','uniqueUserResults','blogpost','tehsilUser'));
    }

    public function member(){

        $users = User::paginate(8);
        return view('frontend.pages.member.member',compact('users'));
    }

    
   
}
