<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function dashboard()  {
    // if (Gate::allows('isAdmin')) {
        $this->setPageTitle('Dashboard');
        return view('backend.include.content_wrapper');
    // } else {
    //     abort(401);
    // }
   }
}