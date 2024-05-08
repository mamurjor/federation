<?php

namespace App\Listeners;

use App\Models\User;
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
        $client = User::where('role_id', 2)->first();

        if ($client) {
            $client->notify(new \App\Notifications\VoteAnnouncementNotification($event->user));
        }
    }
}
