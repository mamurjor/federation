<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\ClassifiedAdSubmitted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendClassifiedAdNotification
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
    public function handle(ClassifiedAdSubmitted $event): void
    {
        $admin = User::where('role_id', 1)->first();

        if ($admin) {
            $admin->notify(new \App\Notifications\ClassifiedAdPosted($event->user));
        }
    }
}
