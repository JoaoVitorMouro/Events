<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotificationDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

//        dd($items_data);
        return [
            "id" => $this->id,
            "type" => $this->type,
            "status" => $this->description,
            // "user" => new UserResource($this->user_id),
            // "event_id" => new EventResource($this->event_id),
            "message" => new MessageTemplateDetailsResource($this->message),
        ];
    }

}
