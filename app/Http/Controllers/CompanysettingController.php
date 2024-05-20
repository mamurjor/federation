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

     
   
        Setting::updateOrCreate(['key' => 'copyright'], ['value' => $request->copyright]);
        Setting::updateOrCreate(['key' => 'footerdescription'], ['value' => $request->footerdescription]);
        Setting::updateOrCreate(['key' => 'footertelnumber'], ['value' => $request->footertelnumber]);
        Setting::updateOrCreate(['key' => 'footeremail'], ['value' => $request->footeremail]);
        Setting::updateOrCreate(['key' => 'footeraddress'], ['value' => $request->footeraddress]);
        Setting::updateOrCreate(['key' => 'homeurl'], ['value' => $request->homeurl]);
        Setting::updateOrCreate(['key' => 'abouturl'], ['value' => $request->abouturl]);
        Setting::updateOrCreate(['key' => 'serviceurl'], ['value' => $request->serviceurl]);
        Setting::updateOrCreate(['key' => 'contacturl'], ['value' => $request->contacturl]);
        Setting::updateOrCreate(['key' => 'helpcenterurl'], ['value' => $request->helpcenterurl]);
        Setting::updateOrCreate(['key' => 'howitworksurl'], ['value' => $request->howitworksurl]);
        Setting::updateOrCreate(['key' => 'registrationurl'], ['value' => $request->registrationurl]);
        Setting::updateOrCreate(['key' => 'loginurl'], ['value' => $request->loginurl]);
        Setting::updateOrCreate(['key' => 'privacyurl'], ['value' => $request->privacyurl]);
        Setting::updateOrCreate(['key' => 'termsconditionurl'], ['value' => $request->termsconditionurl]);
        Setting::updateOrCreate(['key' => 'professionurl'], ['value' => $request->professionurl]);
        Setting::updateOrCreate(['key' => 'countrypageurl'], ['value' => $request->countrypageurl]);
        Setting::updateOrCreate(['key' => 'tehsilurl'], ['value' => $request->tehsilurl]);
        Setting::updateOrCreate(['key' => 'footerlastsectiontext'], ['value' => $request->footerlastsectiontext]);
      


        if ($request->hasFile('flogo')) {
            $image     = $request->file('flogo');
            $flogopath = '/admin/setting/' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin/setting'), $flogopath);
            Setting::updateOrCreate(['key' => 'flogo'], ['value' => $flogopath]);
        }


        if ($request->hasFile('paymentmethod')) {
            $imagepaymentmethod = $request->file('paymentmethod');
            $paymentmethodpath  = '/admin/setting/' . time() . '.' . $imagepaymentmethod->getClientOriginalExtension();
            $imagepaymentmethod->move(public_path('admin/setting'), $paymentmethodpath);
            Setting::updateOrCreate(['key' => 'paymentmethod'], ['value' => $paymentmethodpath]);
        }

          // if ($request->hasFile('visa')) {
          //     $imagevisa = $request->file('visa');
          //     $visapath = '/admin/setting/' . time() . '.' . $imagevisa->getClientOriginalExtension();
          //     $imagevisa->move(public_path('admin/setting'), $visapath);
          //     Setting::updateOrCreate(['key' => 'visa'], ['value' => $visapath]);
          // }
        
          // if ($request->hasFile('mastercard')) {
          //     $imagemastercard = $request->file('mastercard');
          //     $mastercardpath = '/admin/setting/' . time() . '.' . $imagemastercard->getClientOriginalExtension();
          //     $imagemastercard->move(public_path('admin/setting'), $mastercardpath);
          //     Setting::updateOrCreate(['key' => 'mastercard'], ['value' => $mastercardpath]);
          // }
          // if ($request->hasFile('discover')) {
          //     $imagediscover = $request->file('discover');
          //     $discoverpath = '/admin/setting/' . time() . '.' . $imagediscover->getClientOriginalExtension();
          //     $imagediscover->move(public_path('admin/setting'), $discoverpath);
          //     Setting::updateOrCreate(['key' => 'discover'], ['value' => $discoverpath]);
          // }
          // if ($request->hasFile('american')) {
          //     $imageamerican = $request->file('american');
          //     $americanpath = '/admin/setting/' . time() . '.' . $imageamerican->getClientOriginalExtension();
          //     $imageamerican->move(public_path('admin/setting'), $americanpath);
          //     Setting::updateOrCreate(['key' => 'american'], ['value' => $americanpath]);
          // }
     
        
       

        return redirect()->route('company.setting')->with('success','Created successfully.');
    }


    public function companysettingheader(Request $request){

      
        Setting::updateOrCreate(['key' => 'ficon'], ['value' => $request->ficon]);
        Setting::updateOrCreate(['key' => 'furl'], ['value' => $request->furl]);
        
       

        Setting::updateOrCreate(['key' => 'ticon'], ['value' => $request->ticon]);
        Setting::updateOrCreate(['key' => 'turl'], ['value' => $request->turl]);

     

        Setting::updateOrCreate(['key' => 'licon'], ['value' => $request->licon]);
        Setting::updateOrCreate(['key' => 'lurl'], ['value' => $request->lurl]);

    

        Setting::updateOrCreate(['key' => 'yicon'], ['value' => $request->yicon]);
        Setting::updateOrCreate(['key' => 'yurl'], ['value' => $request->yurl]);


        if ($request->hasFile('hlogo')) {
            $imagehlogo = $request->file('hlogo');
            $hlogopath  = '/admin/setting/' . time() . '.' . $imagehlogo->getClientOriginalExtension();
            $imagehlogo->move(public_path('admin/setting'), $hlogopath);
            Setting::updateOrCreate(['key' => 'hlogo'], ['value' => $hlogopath]);
        }

        return redirect()->route('company.setting')->with('success','Created successfully.');

    }
    
}
