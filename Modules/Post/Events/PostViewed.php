<?php

namespace Modules\Post\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Post\Models\Post;

class PostViewed
{
    use SerializesModels;

    public $blog;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Post $blog)
    {
        $this->post = $blog;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
