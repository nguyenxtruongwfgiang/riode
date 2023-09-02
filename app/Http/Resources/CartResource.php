<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'                => $this->id,
            'amout'             => $this->amount,
            'total_amount'      => $this->total_amount,
            'quantity'          => $this->quantity,
            'count_cart'        => $this->count_cart
        ];
    }
}
