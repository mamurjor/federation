<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()  {
        // if (Gate::allows('isAdmin')) {
            $this->setPageTitle('Dashboard');
            return view('backend.client');
        // } else {
        //     abort(401);
        // }
       }
}
