<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);
        
        Log::info($request->all());

        Contact::create($request->all());

        return response()->json(['message' => 'Contact information submitted successfully!']);
    }
}
