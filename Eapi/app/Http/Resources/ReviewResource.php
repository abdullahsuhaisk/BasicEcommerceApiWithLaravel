<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'customer' => $this->customer,
            'product_id' => $this->product_id,
            'star' => $this->star,
            'body' => $this->review,
        ];
    }
}
