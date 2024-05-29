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

    public function companysettingcontact(Request $request){

      
        Setting::updateOrCreate(['key' => 'ficon'], ['value' => $request->ficon]);
        Setting::updateOrCreate(['key' => 'furl'], ['value' => $request->furl]);
        
       

        Setting::updateOrCreate(['key' => 'ticon'], ['value' => $request->ticon]);
        Setting::updateOrCreate(['key' => 'turl'], ['value' => $request->turl]);

     

        Setting::updateOrCreate(['key' => 'licon'], ['value' => $request->licon]);
        Setting::updateOrCreate(['key' => 'lurl'], ['value' => $request->lurl]);

    

        Setting::updateOrCreate(['key' => 'yicon'], ['value' => $request->yicon]);
        Setting::updateOrCreate(['key' => 'yurl'], ['value' => $request->yurl]);

        Setting::updateOrCreate(['key' => 'title'], ['value' => $request->title]);
        Setting::updateOrCreate(['key' => 'subtitle'], ['value' => $request->subtitle]);
        Setting::updateOrCreate(['key' => 'phone'], ['value' => $request->phone]);
        Setting::updateOrCreate(['key' => 'email'], ['value' => $request->email]);
        Setting::updateOrCreate(['key' => 'location'], ['value' => $request->location]);
        Setting::updateOrCreate(['key' => 'map'], ['value' => $request->map]);


     
        return redirect()->route('company.setting')->with('success','Created successfully.');

    }
    
    public function companysettingpresident(Request $request){  

        Setting::updateOrCreate(['key' => 'ptitle'], ['value' => $request->ptitle]);
        Setting::updateOrCreate(['key' => 'psubtitle'], ['value' => $request->psubtitle]);

     
        return redirect()->route('company.setting')->with('success','Created successfully.');

    }
    public function companysettingfaq(Request $request){  

        Setting::updateOrCreate(['key' => 'ftitle'], ['value' => $request->ftitle]);
        Setting::updateOrCreate(['key' => 'fsubtitle'], ['value' => $request->fsubtitle]);

     
        return redirect()->route('company.setting')->with('success','Created successfully.');

    }
    public function companysettingblog(Request $request){  

        Setting::updateOrCreate(['key' => 'btitle'], ['value' => $request->btitle]);
        Setting::updateOrCreate(['key' => 'bicon'], ['value' => $request->bicon]);
        Setting::updateOrCreate(['key' => 'btext'], ['value' => $request->btext]);
        Setting::updateOrCreate(['key' => 'burl'], ['value' => $request->burl]);

     
        return redirect()->route('company.setting')->with('success','Created successfully.');

    }
    public function companysettingjoinus(Request $request){  

        Setting::updateOrCreate(['key' => 'jtitle'], ['value' => $request->jtitle]);
        Setting::updateOrCreate(['key' => 'jsubtitle'], ['value' => $request->jsubtitle]);
        Setting::updateOrCreate(['key' => 'jicon'], ['value' => $request->jicon]);
        Setting::updateOrCreate(['key' => 'jtext'], ['value' => $request->jtext]);
        Setting::updateOrCreate(['key' => 'jurl'], ['value' => $request->jurl]);

     
        return redirect()->route('company.setting')->with('success','Created successfully.');

    }
    public function companysettingclassified(Request $request){  
        
        if ($request->hasFile('clogo')) {
            $imageclogo = $request->file('clogo');
            $clogopath  = '/admin/setting/' . time() . '.' . $imageclogo->getClientOriginalExtension();
            $imageclogo->move(public_path('admin/setting'), $clogopath);
            Setting::updateOrCreate(['key' => 'clogo'], ['value' => $clogopath]);
        }

        Setting::updateOrCreate(['key' => 'ctitle'], ['value' => $request->ctitle]);
        Setting::updateOrCreate(['key' => 'csubtitle'], ['value' => $request->csubtitle]);
        Setting::updateOrCreate(['key' => 'cicon'], ['value' => $request->cicon]);
        Setting::updateOrCreate(['key' => 'ctext'], ['value' => $request->ctext]);
        Setting::updateOrCreate(['key' => 'curl'], ['value' => $request->curl]);

     
        return redirect()->route('company.setting')->with('success','Created successfully.');

    }
    public function companysettingmatro(Request $request){  
        
        if ($request->hasFile('mlogo')) {
            $imagemlogo = $request->file('mlogo');
            $mlogopath  = '/admin/setting/' . time() . '.' . $imagemlogo->getClientOriginalExtension();
            $imagemlogo->move(public_path('admin/setting'), $mlogopath);
            Setting::updateOrCreate(['key' => 'mlogo'], ['value' => $mlogopath]);
        }

        Setting::updateOrCreate(['key' => 'mtitle'], ['value' => $request->mtitle]);
        Setting::updateOrCreate(['key' => 'msubtitle'], ['value' => $request->msubtitle]);
        Setting::updateOrCreate(['key' => 'micon'], ['value' => $request->micon]);
        Setting::updateOrCreate(['key' => 'mtext'], ['value' => $request->mtext]);
        Setting::updateOrCreate(['key' => 'murl'], ['value' => $request->murl]);

     
        return redirect()->route('company.setting')->with('success','Created successfully.');

    }
    
}
