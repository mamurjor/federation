<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
   public function dashboard()  {
      // if (Gate::allows('isAdmin')) {
        $this->setPageTitle('Dashboard');
        $admin = User::where('role_id', 1)->first();
          // dd($admin);

        $notifications = $admin->notifications()->get();
        $unreadcount   = $admin->unreadNotifications()->count();
          // dd($notifications);

        

        return view('backend.include.content_wrapper_admin',compact('notifications','unreadcount'));
      // } else {
      //     abort(401);
      // }
   }

  //    public function viewAll()
  //    {
  //         $admin = User::where('role_id', 1)->first();
  //         $allnotifications = $admin->notifications()->get();
  //         return view('backend.include.content_wrapper', compact('allnotifications'));
  //    }
}
