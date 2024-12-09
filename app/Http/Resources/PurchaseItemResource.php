<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseEventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          "item"=> new EventResource($this->item),
          "quantity"=> $this->item_quantity,
          'price'=>$this->item_price,
        ];
    }
}
