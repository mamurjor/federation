<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainIndexController extends Controller
{
    public function index(){
        $this->setPageTitle('Home');
        return view('frontend.pages.home');
    }
}
