<?php

namespace App\Http\Controllers\Admin;

use Session;
use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Gender;
use App\Models\Tehsil;
use App\Models\Country;
use App\Models\District;
use App\Models\Votetype;
use App\Models\DisNomini;
use Illuminate\Support\Str;
use App\Mail\VerifyEmailOne;
use App\Mail\VerifyEmailTwo;
use Illuminate\Http\Request;
use App\Models\DisVoteannounce;
use App\Models\VotingPositionType;
use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Events\DistrictVoteAnnounceCreated;

class DistrictController extends Controller
{
        //
    
 public function index()
 {
     $districts = District::all();
     return view('backend.page.district.index', compact('districts'));
 }




 public function create()
 {
    $countries = Country::all();
     return view('backend.page.district.create',compact('countries'));
 }

 public function store(Request $request)
 {
     $request->validate([
         'name'    => 'required|unique:districts,name',
         'code'    => 'required',
         'country' => 'required',
     ]);     
     District::create($request->post());
     return redirect()->route('district.index')->with('success','Created successfully.');
 }

 public function edit($id)

 {

    $district = District::where('id', $id)->first();

    $countries = Country::all();
     return view('backend.page.district.edit',compact('district','countries'));
 }

 public function update(Request $request)
 {
    
    $request->validate([
        'name'    => 'required|unique:districts,name',
        'code'    => 'required',
        'country' => 'required',
            
    ]);



 
    $district = District::find($request->id);
    if ($district) {
            // Modify the attributes of the model
        $district->name    = $request->name;
        $district->code    = $request->code;
        $district->country = $request->country;
        
            // Call the save() method to persist the changes
        $district->save();
    }
    

     return redirect()->route('district.index')->with('success','Updated successfully');
 }


 public function delete(Request $request){

    $district = District::find($request->id);

    if ($district) {
      
        $district->delete();
    }

    return redirect()->route('district.index')->with('success','deleted successfully');
 }



    public function getDistrictByCode($code)
    {
        $district = District::where('code', $code)->first();

        if (!$district) {
            return response()->json(['error' => 'Invalid district code'], 400);
        }
        return response()->json(['district' => $district->name]);
    }

    public function getTehsilByCode($code)
    {
        $tehsil = Tehsil::where('code', $code)->first();

        if (!$tehsil) {
            return response()->json(['error' => 'Invalid tehsil code'], 400);
        }
        return response()->json(['tehsil' => $tehsil->name]);
    }


    public function getGenderByCode($code)
    {
        $gender = Gender::where('code', $code)->first();

        if (!$gender) {
            return response()->json(['error' => 'Invalid gender code'], 400);
        }
        return response()->json(['gender' => $gender->name]);
    }



// District vote 

        public function disvoteannouncecreate(){
         
            $country          = Country::all();
            $district         = District::all();
            $tehsil           = Tehsil::all();
            $votetype         = Votetype::all();
            $votepositiontype = VotingPositionType::all();
            return view('frontend.pages.disVoteAnnounce.create',compact('votetype','country','district','tehsil','votepositiontype'));
        } 
    
    
    
        public function disvoteannouncestore(Request $request)
        {
                  
            $position_type = serialize($request->votepositiontype);
            
            $request->validate([
        
                'country'             => 'required',
                'district'      => 'required',
                'announce'         => 'required',
                'date'             => 'required',
                'votetype'         => 'required',
                'votepositiontype' => 'required',
            ]);
    
            $voteannounceinfo = [
                'country'             => $request->country,
                'district'        => $request->district,
                'announce'         => $request->announce,
                'votetype'         => $request->votetype,
                'votingdate'       => $request->date,
                'votepositiontype' => $position_type,
            ];
        
            $saveinfo = DisVoteannounce::create($voteannounceinfo);

            event(new DistrictVoteAnnounceCreated($saveinfo));
        
            return redirect()->route('voteannounce.index')->with('success','Created successfully.');
        }
    
    
          public function disvoteannounceedit($id)
    
              {
                  $votepositiontype               = VotingPositionType::all();
                  $voteannounce                   = DisVoteannounce::where('id', $id)->first();
                  $votetype                       = Votetype::all();
                  $country = Country::all();
                  $district = District::all();
                  $voteannounce->votepositiontype = unserialize($voteannounce->votepositiontype);
    
                  return view('frontend.pages.disVoteAnnounce.edit',compact('voteannounce','votepositiontype','votetype','country','district'));
              }
    
    
          public function disvoteannounceupdate(Request $request)
          {
        
        
              $voteannounce = DisVoteannounce::find($request->id);
    
              $position_type = serialize($request->votepositiontype);
    
    
              $request->validate([
        
                'country'          => 'required',
                'district'         => 'required',
                'announce'         => 'required',
                'date'             => 'required',
                'votetype'         => 'required',
                'votepositiontype' => 'required',
            ]);
            
              if ($voteannounce) {
                              // Update the record
                  $voteannounce->update([
                    'country'             => $request->country,
                    'district'        => $request->district,
                    'announce'         => $request->announce,
                    'votetype'         => $request->votetype,
                    'votingdate'       => $request->date,
                    'votepositiontype' => $position_type,
                  ]);
        
                  return redirect()->route('voteannounce.index')->with('success', 'Update Successful!');
              } 
              else {
                  return redirect()->route('voteannounce.index')->with('error', 'Record not found!');
              }
          }
    
    
          public function disvoteannouncedelete(Request $request){
    
              $voteannounce = DisVoteannounce::find($request->id);
    
              if ($voteannounce) {
            
                  $voteannounce->delete();
              }
    
              return redirect()->route('voteannounce.index')->with('success','deleted successfully');
          }
    
    
        public function disnominiform($id){
                // dd($id);
            $disvoteannouncement = disVoteannounce::where('id',$id)->first();
                // dd($disvoteannouncement);
            return view('frontend.pages.Nomination.disnominiform',compact('disvoteannouncement'));
        }
    
        public function disnoministore(Request $request){
    
            $request->validate([
              'emailone' => 'required',
              'emailtwo' => 'required',
              'position' => 'required',
            ]);
            
            $request->session()->put('votetype', $request->votetype);
            $request->session()->put('id', $request->id);
            $request->session()->put('country', $request->country);
            $request->session()->put('district', $request->district);
            $request->session()->put('announce', $request->announce);
            $request->session()->put('date', $request->date);
            $request->session()->put('emailone', $request->emailone);
            $request->session()->put('emailtwo', $request->emailtwo);
            $request->session()->put('charge', $request->charge);
            $request->session()->put('position', $request->position);
            $request->session()->put('email_one_verified' , false);
            $request->session()->put('email_two_verified' , false);
              
    
            return redirect()->route('disstripe')->with('success','Please Payment $'.Session::get('charge'));
    
        }
    
        public function disstripe(){
            return view("frontend.pages.paymentform.dispayment");
          }
    
        public function disstripestore(Request $request)
        {
    
          $tokenOne = Str::random(32);
          $tokenTwo = Str::random(32);
    
            Stripe::setApiKey(env('STRIPE_SECRET'));
        
            Charge::create ([
                    "amount"      => Session::get('charge'),
                    "currency"    => "usd",
                    "source"      => $request->stripeToken,
                    "description" => "Thanks for the payment."
            ]);
            
                      // Session::get('amount');
            Session::flash('success', 'Payment successful!');
    
    
           $nomini = DisNomini::create([
                'disnomini_id'     => Auth::id(),
                'country'               => Session::get('country'),
                'district'          => Session::get('district'),
                'announce'           => Session::get('announce'),
                'votetype'           => Session::get('votetype'),
                'votingdate'         => Session::get('date'),
                'emailone'           => Session::get('emailone'),
                'emailtwo'           => Session::get('emailtwo'),
                'charge'             => Session::get('charge'),
                'votepositiontype'   => Session::get('position'),
                'email_one_verified' => Session::get('email_one_verified'),
                'email_two_verified' => Session::get('email_two_verified'),
                'token_one'          => $tokenOne,
                'token_two'          => $tokenTwo,
                'card_number'        => $request->cardNumber,
                'stripe_token'       => 'see your stripe account',
                'payment_type'       => 'Stripe',
            ]);
                      // dd($nomini);
                  Mail::to(Session::get('emailone'))->send(new VerifyEmailOne(Session::get('emailone'), $tokenOne));
                  Mail::to(Session::get('emailtwo'))->send(new VerifyEmailTwo(Session::get('emailtwo'), $tokenTwo));
            
            return back();
        }
    
        public function approve(Request $request){
    
            $disnomini = DisNomini::find($request->id);
            $disnomini->status = '1';
            $disnomini->save();
          
            return redirect()->back()->with('success', 'Nomination approved successfully.');
           }
           
          public function declined(Request $request){
    
            $disnomini = DisNomini::find($request->id);
            $disnomini->status = '0';
            $disnomini->save();
          
            return redirect()->back()->with('success', 'Nomination declined successfully.');
           }
    
           public function disnominidelete(Request $request){
               
               $disnomini = DisNomini::find($request->id);
               if ($disnomini) {
                   $disnomini->delete();
                }
          
            return redirect()->back()->with('success','deleted successfully');
            }

}   
