<?php

namespace App\Events;

use App\Models\DisVoteannounce;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class DistrictVoteAnnounceCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $districtVoteAnnounce;

    public function __construct(DisVoteannounce $districtVoteAnnounce)
    {
        $this->districtVoteAnnounce = $districtVoteAnnounce;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
