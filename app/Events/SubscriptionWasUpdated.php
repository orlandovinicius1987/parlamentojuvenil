<?php

namespace App\Events;

use App\Models\Subscription;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SubscriptionWasUpdated extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $subscription;

    /**
     * Create a new event instance.
     *
     * @param Subscription $subscription
     */
    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['subscriptions'];
    }
}
