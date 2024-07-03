<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\MatrimonialAdPosted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMatrimonialAdNotification
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
    public function handle(MatrimonialAdPosted $event): void
    {
        $admin = User::where('role_id', 1)->first();

        if ($admin) {
            $admin->notify(new \App\Notifications\MatrimonialAdPostedNotification($event->user));
        }
    }
}
