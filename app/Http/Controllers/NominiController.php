<?php

namespace App\Http\Controllers;

use Session;
use Stripe;
use App\Models\Voteannounce;
use Illuminate\Http\Request;


class NominiController extends Controller
{
    public function nominiform($id){
        $voteannouncement =  Voteannounce::where('id',$id)->get();

        return view('frontend.pages.Nomination.Nominiform',compact('voteannouncement'));
    }

    public function noministore(Request $request){

        $request->session()->put('votetype', $request->votetype);
        $request->session()->put('country', $request->country);
        $request->session()->put('district', $request->district);
        $request->session()->put('tehsil', $request->tehsil);
        $request->session()->put('announce', $request->announce);
        $request->session()->put('date', $request->date);
        $request->session()->put('charge', $request->charge);
        $request->session()->put('position', $request->position);

        // $request->session()->put('formData', $request->all());

        return redirect()->route('stripe')->with('success','Next Step Payment');

    }
  public function stripe(){
    return view("frontend.pages.paymentform.stripepayment");
  }

    public function stripestore(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }
}
