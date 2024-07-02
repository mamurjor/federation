<?php

namespace App\Http\Controllers;

use Stripe;
use Session;
use App\Models\Nomini;
use App\Models\WingsNomini;
use Illuminate\Support\Str;
use App\Mail\VerifyEmailOne;
use App\Mail\VerifyEmailTwo;
use App\Models\Voteannounce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class NominiController extends Controller
{

    public function nominiindex(){
      $allnomini  = Nomini::with('user')->get();
      // dd($allnomini);
      $allwingsnomini  = WingsNomini::with('user')->get();
    
      return view('frontend.pages.Nomination.allnomin',compact('allnomini','allwingsnomini'));
    }

    public function nominiform($id){
        
        $voteannouncement = Voteannounce::where('id',$id)->first();
            // dd($voteannouncement);
        return view('frontend.pages.Nomination.Nominiform',compact('voteannouncement'));
    }

    public function noministore(Request $request){

        $request->validate([
          'emailone' => 'required',
          'emailtwo' => 'required',
          'position' => 'required',
        ]);
        
        $request->session()->put('votetype', $request->votetype);
        $request->session()->put('id', $request->id);
        $request->session()->put('country', $request->country);
        $request->session()->put('district', $request->district);
        $request->session()->put('tehsil', $request->tehsil);
        $request->session()->put('announce', $request->announce);
        $request->session()->put('date', $request->date);
        $request->session()->put('emailone', $request->emailone);
        $request->session()->put('emailtwo', $request->emailtwo);
        $request->session()->put('charge', $request->charge);
        $request->session()->put('position', $request->position);
        $request->session()->put('email_one_verified' , false);
        $request->session()->put('email_two_verified' , false);
          

        return redirect()->route('stripe')->with('success','Please Payment $'.Session::get('charge'));

    }

    public function stripe(){
      return view("frontend.pages.paymentform.stripepayment");
    }

    public function stripestore(Request $request)
    {

      $tokenOne = Str::random(32);
      $tokenTwo = Str::random(32);

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount"      => Session::get('charge'),
                "currency"    => "usd",
                "source"      => $request->stripeToken,
                "description" => "Thanks for the payment."
        ]);
        
              // Session::get('amount');
        Session::flash('success', 'Payment successful!');


        $nomini = Nomini::create([
            'nomini_id'          => Auth::id(),
            'country'            => Session::get('country'),
            'district'           => Session::get('district'),
            'tehsil'             => Session::get('tehsil'),
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

        $nomini = Nomini::find($request->id);
              // dd($nomini); 
        $nomini->status = '1';
        $nomini->save();
      
        return redirect()->back()->with('success', 'Nomination approved successfully.');
       }
       
    public function declined(Request $request){

        $nomini = Nomini::find($request->id);
              // dd($nomini); 
        $nomini->status = '0';
        $nomini->save();
      
        return redirect()->back()->with('success', 'Nomination declined successfully.');
       }

       public function nominidelete(Request $request){

        $nomini = Nomini::find($request->id);
      
        if ($nomini) {
          
            $nomini->delete();
        }
      
        return redirect()->route('nomini.index')->with('success','deleted successfully');
      }
}
