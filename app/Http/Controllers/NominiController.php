<?php

namespace App\Http\Controllers;

use App\Models\Voteannounce;
use Illuminate\Http\Request;

class NominiController extends Controller
{
    public function nominiform($id){
        $voteannouncement =  Voteannounce::where('id',$id)->get();

        return view('frontend.pages.Nomination.Nominiform',compact('voteannouncement'));
    }
}
