<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use App\Models\Voteannounce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()  {
          // if (Gate::allows('isAdmin')) {
            $this->setPageTitle('Dashboard');
            
            $client = User::where('id', Auth::id())->first();
            $vote   = Voteannounce::where('tehsil', $client->tehsil)->get();
       
            
        $notifications = $client->notifications()->where('type', 'App\Notifications\VoteAnnouncementNotification')->get();
        $filters =  $client->notifications()->where('type', 'App\Notifications\WingsVoteAnnouncementNotification')->whereJsonContains('data->user_name', $client->profession)->get();
        $unreadcount   = $client->unreadNotifications()->count();
        // $singlevalue = Voteannounce::where('id', Auth::id())->first();
            return view('backend.include.content_wrapper',compact('unreadcount','notifications','vote','filters'));
          // } else {
          //     abort(401);
          // }
       }
}
