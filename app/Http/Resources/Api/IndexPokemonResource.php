<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexPokemonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'number' => $this->number,
            'form' => $this->form,
            'location_id' => $this->location_id,
            'location' => IndexLocationResource::make($this->location),
            'images' => IndexImageResource::collection($this->images),
            'abilities' => IndexAbilityResource::collection($this->abilities)
        ];
    }
}
