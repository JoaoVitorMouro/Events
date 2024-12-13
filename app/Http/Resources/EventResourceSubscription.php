<?php

namespace App\Http\Resources;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResourceSubscription extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "start_time" => $this->start_time,
            "end_time" => $this->end_time,
            "notifications" => $this->notifications->isNotEmpty()
                ? NotificationDetailsResource::collection($this->notifications)
                : null,
        ];
    }
}
