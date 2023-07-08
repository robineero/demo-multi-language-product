<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $values = [];

        foreach ($this->whenLoaded('attributes') as $attribute) {
                $values[$attribute->key] = $attribute->pivot->value;
        }

        return [
            'id' => $this->id,
            'name' => $values['product_name'] ?? "",
            'description' => $values['product_description'] ?? "",
        ];
    }
}
