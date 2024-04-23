<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class CompanysettingController extends Controller
{
    //
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function companysettingform(){

       
        $this->setPageTitle('Company Setting');
        return view("backend.page.companysetting.compnaysettingform");
    }


    public function companysetting(Request $request){

        Setting::updateOrCreate(['key' => 'blogtitle'], ['value' => $request->blogtitle]);
        Setting::updateOrCreate(['key' => 'blogslogan'], ['value' => $request->blogslogan]);
        Setting::updateOrCreate(['key' => 'casttitle'], ['value' => $request->casttitle]);
        Setting::updateOrCreate(['key' => 'castslogan'], ['value' => $request->blogslogan]);
        Setting::updateOrCreate(['key' => 'matromonialtitle'], ['value' => $request->matromonialtitle]);
        Setting::updateOrCreate(['key' => 'matromonialslogan'], ['value' => $request->matromonialslogan]);
        Setting::updateOrCreate(['key' => 'countrytitle'], ['value' => $request->countrytitle]);
        Setting::updateOrCreate(['key' => 'countryslogan'], ['value' => $request->countryslogan]);
        Setting::updateOrCreate(['key' => 'tehsiltitle'], ['value' => $request->tehsiltitle]);
        Setting::updateOrCreate(['key' => 'tehsilslogan'], ['value' => $request->tehsilslogan]);
        Setting::updateOrCreate(['key' => 'districttitle'], ['value' => $request->districttitle]);
        Setting::updateOrCreate(['key' => 'districtslogan'], ['value' => $request->districtslogan]);
        Setting::updateOrCreate(['key' => 'contacttitle'], ['value' => $request->contacttitle]);
        Setting::updateOrCreate(['key' => 'contactslogan'], ['value' => $request->contactslogan]);
        Setting::updateOrCreate(['key' => 'abouttitle'], ['value' => $request->abouttitle]);
        Setting::updateOrCreate(['key' => 'aboutslogan'], ['value' => $request->aboutslogan]);
        Setting::updateOrCreate(['key' => 'wingstitle'], ['value' => $request->wingstitle]);
        Setting::updateOrCreate(['key' => 'wingsslogan'], ['value' => $request->wingsslogan]);

        return redirect()->route('company.setting')->with('success','Created successfully.');
    }
    public function companysettingfooter(Request $request){

        // $image = $request->file('flogo');
        // $flogopath = null;
        // if($image){

        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $flogopath = '/admin/setting/'.$imageName;
        //     $image->move(public_path('admin/setting'), $imageName);
        // }
       

        // $imagepaypal = $request->file('paypal');
        // $paypalpath = null;
        // if($imagepaypal){

        //     $imageNamepaypal = time() . '.' . $imagepaypal->getClientOriginalExtension();
        //     $paypalpath = '/admin/setting/'.$imageNamepaypal;
        //     $imagepaypal->move(public_path('admin/setting'), $imageNamepaypal);
        // }


   
        Setting::updateOrCreate(['key' => 'copyright'], ['value' => $request->copyright]);
        Setting::updateOrCreate(['key' => 'footerdescription'], ['value' => $request->footerdescription]);
        Setting::updateOrCreate(['key' => 'footertelnumber'], ['value' => $request->footertelnumber]);
        Setting::updateOrCreate(['key' => 'footeremail'], ['value' => $request->footeremail]);
        Setting::updateOrCreate(['key' => 'homeurl'], ['value' => $request->homeurl]);
        Setting::updateOrCreate(['key' => 'abouturl'], ['value' => $request->abouturl]);
        Setting::updateOrCreate(['key' => 'servicesurl'], ['value' => $request->servicesurl]);
        Setting::updateOrCreate(['key' => 'contacturl'], ['value' => $request->contacturl]);
        Setting::updateOrCreate(['key' => 'helpcenterurl'], ['value' => $request->helpcenterurl]);
        Setting::updateOrCreate(['key' => 'howitworksurl'], ['value' => $request->howitworksurl]);
        Setting::updateOrCreate(['key' => 'registrationurl'], ['value' => $request->registrationurl]);
        Setting::updateOrCreate(['key' => 'loginurl'], ['value' => $request->loginurl]);
        Setting::updateOrCreate(['key' => 'privacyurl'], ['value' => $request->privacyurl]);
        Setting::updateOrCreate(['key' => 'professionurl'], ['value' => $request->professionurl]);
        Setting::updateOrCreate(['key' => 'countrypageurl'], ['value' => $request->countrypageurl]);
        Setting::updateOrCreate(['key' => 'tehsilurl'], ['value' => $request->tehsilurl]);
        Setting::updateOrCreate(['key' => 'footerlastsectiontext'], ['value' => $request->footerlastsectiontext]);
        Setting::updateOrCreate(['key' => 'paypal'], ['value' => $request->paypal]);
        Setting::updateOrCreate(['key' => 'visa'], ['value' => $request->visa]);
        Setting::updateOrCreate(['key' => 'mastercard'], ['value' => $request->mastercard]);
        Setting::updateOrCreate(['key' => 'discover'], ['value' => $request->discover]);
        Setting::updateOrCreate(['key' => 'americanexpress'], ['value' => $request->americanexpress]);


        if ($request->hasFile('flogo')) {
            $image = $request->file('flogo');
            $flogopath = '/admin/setting/' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin/setting'), $flogopath);
            Setting::updateOrCreate(['key' => 'flogo'], ['value' => $flogopath]);
        }


        if ($request->hasFile('paypal')) {
            $imagepaypal = $request->file('paypal');
            $paypalpath = '/admin/setting/' . time() . '.' . $imagepaypal->getClientOriginalExtension();
            $imagepaypal->move(public_path('admin/setting'), $paypalpath);
            Setting::updateOrCreate(['key' => 'paypal'], ['value' => $paypalpath]);
        }

        if ($request->hasFile('visa')) {
            $imagevisa = $request->file('visa');
            $visapath = '/admin/setting/' . time() . '.' . $imagevisa->getClientOriginalExtension();
            $imagevisa->move(public_path('admin/setting'), $visapath);
            Setting::updateOrCreate(['key' => 'visa'], ['value' => $visapath]);
        }
        
        if ($request->hasFile('mastercard')) {
            $imagemastercard = $request->file('mastercard');
            $mastercardpath = '/admin/setting/' . time() . '.' . $imagemastercard->getClientOriginalExtension();
            $imagemastercard->move(public_path('admin/setting'), $mastercardpath);
            Setting::updateOrCreate(['key' => 'mastercard'], ['value' => $mastercardpath]);
        }
     
        
       

        return redirect()->route('company.setting')->with('success','Created successfully.');
    }
    
}
