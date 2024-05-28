<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use App\Models\Voteannounce;
use Illuminate\Http\Request;
use App\Models\DisVoteannounce;
use App\Models\WingsVoteannounce;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function dashboard()
  {
      $this->setPageTitle('Dashboard');
      
      $client = User::where('id', Auth::id())->first();
      $vote   = Voteannounce::where('tehsil', $client->tehsil)->get();
      $wingsvote = WingsVoteannounce::where('profession_name', $client->profession)->get();
      $disvote = DisVoteannounce::all();
    
  
      $disNotifications = $client->notifications()->where('type', 'App\Notifications\DistrictVoteAnnounceNotification')->get();
      // dd($disNotifications);
      $notifications = $client->notifications()->where('type', 'App\Notifications\VoteAnnouncementNotification')->get();
      $filters       = $client->notifications()->where('type', 'App\Notifications\WingsVoteAnnouncementNotification')
                                               ->whereJsonContains('data->user_name', $client->profession)->get();
  
          $hasWingsVoteAnnouncements = $client->notifications()->where('type', 'App\Notifications\WingsVoteAnnouncementNotification')->whereJsonContains('data->user_name', $client->profession)->count() > 0;
            // dd($hasWingsVoteAnnouncements);
            // Log::info('Has Wings Vote Announcements: ', ['value' => $hasWingsVoteAnnouncements]);
          
            $unreadcount = $hasWingsVoteAnnouncements
              ?  $client->unreadNotifications()->count() 
              :  $client->unreadNotifications()->where('type', 'App\Notifications\VoteAnnouncementNotification')->count();
      

      return view('backend.include.content_wrapper', compact('unreadcount', 'notifications', 'vote', 'filters', 'wingsvote','disvote','disNotifications'));
   
  }

}
