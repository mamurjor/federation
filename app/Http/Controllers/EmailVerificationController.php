<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyUser;
use App\Models\Nomini;

class EmailVerificationController extends Controller
{
    public function verify(Request $request)
    {
        $email = $request->query('email');
        $token = $request->query('token');

          // Fetch nominee by email
        $nominee = Nomini::where('emailone', $email)->orWhere('emailtwo', $email)->first();

        if ($nominee) {
            if ($email == $nominee->emailone && $token == $nominee->token_one) {
                $nominee->email_one_verified = true;
                $nominee->save();

                  // Notify user
                Mail::to(Auth::user()->email)->send(new NotifyUser('Email one has been verified.'));
            } 
            elseif ($email == $nominee->emailtwo && $token == $nominee->token_two) {
                $nominee->email_two_verified = true;
                $nominee->save();

                  // Notify user
                Mail::to(Auth::user()->email)->send(new NotifyUser('Email two has been verified.'));
            } 
            else {
                return redirect()->back()->with('error', 'Invalid verification link.');
            }

            return redirect()->back()->with('success', 'Email verified successfully.');
        }

        return redirect()->back()->with('error', 'Invalid verification link.');
    }


    private function verifyToken($email, $token)
    {
                      // Implement token verification logic
        return true;  // Placeholder
    }
}
