<?php

namespace App\Http\Controllers;

use App\Models\Nomini;
use Session;
use Stripe;
use App\Models\Voteannounce;
use Illuminate\Http\Request;


class NominiController extends Controller
{

    public function nominiindex(){
        $allnomini = Nomini::all();
        return view('frontend.pages.Nomination.allnomin',compact('allnomini'));
    }

    public function nominiform($id){
        
        $voteannouncement =  Voteannounce::where('id',$id)->get();
        return view('frontend.pages.Nomination.Nominiform',compact('voteannouncement'));
    }

    public function noministore(Request $request){

        $request->session()->put('votetype', $request->votetype);
        $request->session()->put('id', $request->id);
        $request->session()->put('country', $request->country);
        $request->session()->put('district', $request->district);
        $request->session()->put('tehsil', $request->tehsil);
        $request->session()->put('announce', $request->announce);
        $request->session()->put('date', $request->date);
        $request->session()->put('charge', $request->charge);
        $request->session()->put('position', $request->position);

        // $request->session()->put('formData', $request->all());

        return redirect()->route('stripe')->with('success','Please Payment $'.Session::get('charge'));

    }

    public function stripe(){
      return view("frontend.pages.paymentform.stripepayment");
    }

    public function stripestore(Request $request)
    {
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
            'nomini_id'          => Session::get('id'),
            'country'          => Session::get('country'),
            'district'         => Session::get('district'),
            'tehsil'           => Session::get('tehsil'),
            'announce'         => Session::get('announce'),
            'votetype'         => Session::get('votetype'),
            'votingdate'       => Session::get('date'),
            'charge'           => Session::get('charge'),
            'votepositiontype' => Session::get('position'),
            'card_number'      => $request->cardNumber,
            'stripe_token'     => 'see your stripe account',
            'payment_type'     => 'Stripe',
        ]);
        // dd($nomini);
    
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
