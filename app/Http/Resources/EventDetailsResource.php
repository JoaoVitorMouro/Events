<?php

namespace App\Http\Resources;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventDetailsResource extends JsonResource
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
            // "notifications"=> new NotificationResource($this->notifications),
            "notifications" => $this->notifications->isNotEmpty()
                ? NotificationResource::collection($this->notifications)
                : null,
            "subscriptions" => $this->subscriptions->isNotEmpty()
                ? SubscriptionResource::collection($this->subscriptions)
                : null,

        ];
    }

}
