<?php

namespace App\Listeners;

use App\Models\User;
use App\Models\VoteResult;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\DistrictVoteAnnounceCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\DistrictVoteAnnounceNotification;

class SendDistrictVoteAnnounceNotification
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
    public function handle(DistrictVoteAnnounceCreated $event)
    {
        $voteResults = VoteResult::where('status', '1')->with('user')->get();

        foreach ($voteResults as $voteResult) {
            $user = $voteResult->user;
            if ($user) {
                $user->notify(new DistrictVoteAnnounceNotification($event->districtVoteAnnounce));
            }
        }
    }
}
