<?php

namespace App\Events;

use App\Data\Entities\Subscription;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SubscriptionUpdated extends Event implements ShouldBroadcast
{
    use SerializesModels;

	public $subscription;

	/**
     * Create a new event instance.
     *
     * @return void
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
        return ['subscription.updated'];
    }
}
