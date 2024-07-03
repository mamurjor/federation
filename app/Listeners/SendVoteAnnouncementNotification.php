<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Events\VoteAnnouncementPosted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendVoteAnnouncementNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(VoteAnnouncementPosted $event): void
    {
        // dd($event->user->tehsil);
     
        $clients = User::where('role_id', 2)->where('tehsil', $event->user->tehsil)->get();

         foreach($clients as $client){

          $client->notify(new \App\Notifications\VoteAnnouncementNotification($event->user));
      }
              
    }
}
