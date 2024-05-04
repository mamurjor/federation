<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\NewUserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateNewUserNotification
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
    public function handle(NewUserRegistered $event)
    {
        $admin = User::where('role_id', 1)->first();

        if ($admin) {
            $admin->notify(new \App\Notifications\NewUserNotification($event->user));
        }
    }
}
