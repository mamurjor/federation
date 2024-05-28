<?php

namespace App\Providers;

use App\Events\NewUserRegistered;
use App\Events\MatrimonialAdPosted;
use App\Events\ClassifiedAdSubmitted;
use Illuminate\Support\Facades\Event;
use App\Events\VoteAnnouncementPosted;
use Illuminate\Auth\Events\Registered;
use App\Events\DistrictVoteAnnounceCreated;
use App\Events\WingsVoteAnnouncementPosted;
use App\Listeners\CreateNewUserNotification;
use App\Listeners\SendClassifiedAdNotification;
use App\Listeners\SendMatrimonialAdNotification;
use App\Listeners\SendVoteAnnouncementNotification;
use App\Listeners\SendDistrictVoteAnnounceNotification;
use App\Listeners\SendWingsVoteAnnouncementNotification;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            
            
        ],
        NewUserRegistered::class => [
            CreateNewUserNotification::class,
        ],

        ClassifiedAdSubmitted::class => [
            SendClassifiedAdNotification::class,
        ],

        MatrimonialAdPosted::class => [
            SendMatrimonialAdNotification::class,
        ],

        VoteAnnouncementPosted::class => [
            SendVoteAnnouncementNotification::class,
        ],

        WingsVoteAnnouncementPosted::class => [
            SendWingsVoteAnnouncementNotification::class,
        ],
        
        DistrictVoteAnnounceCreated::class => [
            SendDistrictVoteAnnounceNotification::class,
        ],
        
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
