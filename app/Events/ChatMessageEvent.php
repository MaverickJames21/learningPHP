<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatMessageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $nickname;
    public $variable;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $nickname, string $message)
    {
        // Put event in this variable
        $this->$nickname = $nickname ;
        $this->$message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */


    public function broadcastOn()
    {
        return new Channel('chat');
    }

    // Which name we want to attribute as 'use App\Events etc...'
    public function broadcastAs(){
        return 'chat-message';
    }
}
