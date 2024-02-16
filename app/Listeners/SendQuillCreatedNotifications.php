<?php

namespace App\Listeners;

use App\Events\QuillCreated;
use App\Models\User;
use App\Notifications\NewQuill;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendQuillCreatedNotifications implements ShouldQueue
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
    public function handle(QuillCreated $event): void
    {
        //
        foreach(User::whereNot('id', $event->quill->user_id)->cursor() as $user){
            $user->notify(new NewQuill($event->quill));
        }
    }
}
