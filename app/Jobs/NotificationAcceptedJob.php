<?php

namespace App\Jobs;

use App\Models\Notification;
use App\Services\NotificationAcceptedService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class NotificationAcceptedJob implements ShouldQueue
{
    use Queueable;

    private mixed $id;


    /**
     * Create a new job instance.
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $notification = Notification::where('id', "=", $this->id)->update([
            'status' => "sent"
        ]);

    }
}
