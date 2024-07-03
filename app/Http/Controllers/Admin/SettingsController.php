<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function settingsform(){
        return view('backend.settings.settings');
    }

    public function paymentSettings(){
        return view('frontend.pages.Settings.PaymentSettings.index');
    }
}
