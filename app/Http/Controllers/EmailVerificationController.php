<?php

namespace App\Http\Controllers;

use App\Models\Nomini;
use App\Mail\NotifyUser;
use App\Models\WingsNomini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailVerificationController extends Controller
{
    public function verify(Request $request)
    {
        $email = $request->query('email');
        $token = $request->query('token');

        $nominee = Nomini::where('emailone', $email)->orWhere('emailtwo', $email)->first();
        $wingsnominee = WingsNomini::where('emailone', $email)->orWhere('emailtwo', $email)->first();

        $verified = false;
        $error = 'Invalid verification link.';

        if ($nominee) {
            if ($email == $nominee->emailone && $token == $nominee->token_one) {
                $nominee->email_one_verified = true;
                $nominee->save();

                // Notify user
                Mail::to(Auth::user()->email)->send(new NotifyUser('Email one has been verified.'));
                $verified = true;
            } 
            elseif ($email == $nominee->emailtwo && $token == $nominee->token_two) {
                $nominee->email_two_verified = true;
                $nominee->save();

                // Notify user
                Mail::to(Auth::user()->email)->send(new NotifyUser('Email two has been verified.'));
                $verified = true;
            }
        }

        if ($wingsnominee) {
            if ($email == $wingsnominee->emailone && $token == $wingsnominee->token_one) {
                $wingsnominee->email_one_verified = true;
                $wingsnominee->save();

                // Notify user
                Mail::to(Auth::user()->email)->send(new NotifyUser('Email one has been verified.'));
                $verified = true;
            } 
            elseif ($email == $wingsnominee->emailtwo && $token == $wingsnominee->token_two) {
                $wingsnominee->email_two_verified = true;
                $wingsnominee->save();

                // Notify user
                Mail::to(Auth::user()->email)->send(new NotifyUser('Email two has been verified.'));
                $verified = true;
            }
        }

        if ($verified) {
            return redirect()->back()->with('success', 'Email verified successfully.');
        }

        return redirect()->back()->with('error', $error);
    }
}
