<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Voteannounce;

class DashboardController extends Controller
{
    public function dashboard()  {
        // if (Gate::allows('isAdmin')) {
            $this->setPageTitle('Dashboard');
            $client = User::where('role_id', 2)->first();

            $vote = Voteannounce::where('tehsil', $client->tehsil)->get();
        // dd($client);

        $notifications = $client->notifications()->get();
        $unreadcount = $client->unreadNotifications()->count();
            return view('backend.include.content_wrapper',compact('unreadcount','notifications','vote'));
        // } else {
        //     abort(401);
        // }
       }
}
