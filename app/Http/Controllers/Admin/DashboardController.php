<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\District;
use App\Models\Division;
use App\Models\Tehsil;
use App\Models\International;
use App\Models\Matromonial;
use App\Models\Classified;
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
          $total_users = User::count();
          $total_country = International::count();
          $total_division = Division::count();
          $total_distric = District::count();
          $total_tehsil = Tehsil::count();
          $total_matromonial = Matromonial::count();
          $total_classified = Classified::count();
          

          // Return the total user count
          

        return view('backend.include.content_wrapper_admin',compact('notifications','unreadcount','total_users','total_country','total_division','total_distric','total_tehsil'),
      compact('total_matromonial','total_classified'));
      // } else {
      //     abort(401);
      // }
      

      // Return the total user count
      
   }
   
  //    public function viewAll()
  //    {
  //         $admin = User::where('role_id', 1)->first();
  //         $allnotifications = $admin->notifications()->get();
  //         return view('backend.include.content_wrapper', compact('allnotifications'));
  //    }
}