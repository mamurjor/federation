<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\WingsVoteAnnouncementPosted;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\WingsVoteAnnouncementNotification;

class SendWingsVoteAnnouncementNotification
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
    public function handle(WingsVoteAnnouncementPosted $event): void
    {
        $announcement = $event->announcement;
        $announcementProfession = $announcement->profession_name;
        Log::info('Announcement Profession:', ['profession' => $announcementProfession]);
        $client = User::where('role_id', 2)
                        ->where('profession', $announcementProfession)
                        ->first();

               
        $client->notify(new WingsVoteAnnouncementNotification($announcement));
                
    }
}
