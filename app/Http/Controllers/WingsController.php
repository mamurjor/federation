<?php

namespace App\Http\Controllers;

use Session;
use Stripe\Charge;
use Stripe\Stripe;
use App\Models\User;
use App\Models\Wings;
use App\Models\Tehsil;
use App\Models\Division;
use App\Models\District;
use App\Models\Votetype;
use App\Models\WingsNomini;
use Illuminate\Support\Str;
use App\Mail\VerifyEmailOne;
use App\Mail\VerifyEmailTwo;
use Illuminate\Http\Request;
use App\Models\WingsVoteannounce;
use App\Models\VotingPositionType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Events\VoteAnnouncementPosted;
use App\Events\WingsVoteAnnouncementPosted;

class WingsController extends Controller
{

    public function wingsvoteannouncecreate(){
     
        $wings            = Wings::all();
        $votetype         = Votetype::all();
        $votepositiontype = VotingPositionType::all();
        return view('frontend.pages.WingsVoteAnnounce.create',compact('votetype','votepositiontype','wings'));
    } 



    public function wingsvoteannouncestore(Request $request)
    {
              
        $position_type = serialize($request->votepositiontype);
        $request->validate([
    
            'wings'            => 'required',
            'announce'         => 'required',
            'date'             => 'required',
            'votetype'         => 'required',
            'votepositiontype' => 'required',
        ]);

        $voteannounceinfo = [
            'wings'            => $request->wings,
            'announce'         => $request->announce,
            'votetype'         => $request->votetype,
            'votingdate'       => $request->date,
            'votepositiontype' => $position_type,
        ];
    
        $saveinfo = WingsVoteannounce::create($voteannounceinfo);
           event(new WingsVoteAnnouncementPosted($saveinfo));
            // dd($noti);
        return redirect()->route('voteannounce.index')->with('success','Created successfully.');
    }


      public function wingsvoteannounceedit($id)

          {
              $votepositiontype = VotingPositionType::all();
              $voteannounce     = WingsVoteannounce::where('id', $id)->first();
              $votetype         = Votetype::all();
              $allWings         = Wings::all();
              //   dd($wing);
              $voteannounce->votepositiontype = unserialize($voteannounce->votepositiontype);

              return view('frontend.pages.WingsVoteAnnounce.edit',compact('voteannounce','votepositiontype','votetype','allWings'));
          }


      public function wingsvoteannounceupdate(Request $request)
      {   
          $voteannounce  = WingsVoteannounce::find($request->id);
          $position_type = serialize($request->votepositiontype);
          $request->validate([
            'wings'            => 'required',
            'announce'         => 'required',
            'date'             => 'required',
            'votetype'         => 'required',
            'votepositiontype' => 'required',
        ]);
        
          if ($voteannounce) {
                              // Update the record
              $voteannounce->update([
                'wings'            => $request->wings,
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


      public function wingsvoteannouncedelete(Request $request){

          $voteannounce = WingsVoteannounce::find($request->id);

          if ($voteannounce) {
        
              $voteannounce->delete();
          }

          return redirect()->route('voteannounce.index')->with('success','deleted successfully');
      }


    public function getNames(Request $request)
    {
        $modelName  = $request->input('model');
        $modelClass = 'App\\Models\\' . $modelName;

        if (class_exists($modelClass)) {
            $names = $modelClass::pluck('name');
            return response()->json($names);
        } else {
            return response()->json(['error' => 'Model not found'], 404);
        }
    }

    public function getProfessions(Request $request)
    {
        $type  = $request->input('type');
        $value = $request->input('value');
        
        $users = User::where($type, $value)->pluck('profession');
        return response()->json($users);
    }


    public function wingsnominiform($id){
                // dd($id);
        $wingsvoteannouncement = WingsVoteannounce::where('id',$id)->first();
                // dd($wingsvoteannouncement);
        return view('frontend.pages.Nomination.wingsnominiform',compact('wingsvoteannouncement'));
    }

    public function wingsnoministore(Request $request){

        $request->validate([
          'emailone' => 'required',
          'emailtwo' => 'required',
          'position' => 'required',
        ]);
        
        $request->session()->put('votetype', $request->votetype);
        $request->session()->put('id', $request->id);
        $request->session()->put('wings', $request->wings);
        $request->session()->put('announce', $request->announce);
        $request->session()->put('date', $request->date);
        $request->session()->put('emailone', $request->emailone);
        $request->session()->put('emailtwo', $request->emailtwo);
        $request->session()->put('charge', $request->charge);
        $request->session()->put('position', $request->position);
        $request->session()->put('email_one_verified' , false);
        $request->session()->put('email_two_verified' , false);
          

        return redirect()->route('wingsstripe')->with('success','Please Payment $'.Session::get('charge'));

    }

    public function wingsstripe(){
        return view("frontend.pages.paymentform.wingspayment");
      }

    public function wingsstripestore(Request $request)
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


       $nomini = WingsNomini::create([
            'wingsnomini_id'     => Auth::id(),
            'wings'              => Session::get('wings'),
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

        $wingsnomini         = WingsNomini::find($request->id);
        $wingsnomini->status = '1';
        $wingsnomini->save();
      
        return redirect()->back()->with('success', 'Nomination approved successfully.');
       }
       
      public function declined(Request $request){

        $wingsnomini         = WingsNomini::find($request->id);
        $wingsnomini->status = '0';
        $wingsnomini->save();
      
        return redirect()->back()->with('success', 'Nomination declined successfully.');
       }

       public function wingsnominidelete(Request $request){
           
           $wingsnomini = WingsNomini::find($request->id);
           if ($wingsnomini) {
               $wingsnomini->delete();
            }
      
        return redirect()->back()->with('success','deleted successfully');
      }


        // -----  main wings create ------- >

    public function index()
    {
        $wings = Wings::all();
        return view('backend.page.wings.index', compact('wings'));
    }


    public function create()
    {
        return view('backend.page.wings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'wings_type'      => 'required',
            'wings_type_name' => 'required',
            'profession_name' => 'required',
        ]);     
        Wings::create($request->post());
        return redirect()->route('wings.index')->with('success','Created successfully.');
    }

    public function edit($id)

    {
        $wings = Wings::where('id', $id)->first();
        return view('backend.page.wings.edit',compact('wings'));
    }

    public function update(Request $request)
    {   
        $request->validate([
            'wings_type'      => 'required',
            'wings_type_name' => 'required',
            'profession_name' => 'required',
        ]);

        $wings = Wings::find($request->id);
        if ($wings) {
            $wings->wings_type      = $request->wings_type;
            $wings->wings_type_name = $request->wings_type_name;
            $wings->profession_name = $request->profession_name;
            
                // Call the save() method to persist the changes
            $wings->save();
        }
    

        return redirect()->route('wings.index')->with('success','Updated successfully');
    }


    public function delete(Request $request){

        $wings = Wings::find($request->id);
        if ($wings) {      
            $wings->delete();
        }
        return redirect()->route('wings.index')->with('success','deleted successfully');
    }
}