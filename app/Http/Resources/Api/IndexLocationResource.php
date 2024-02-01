<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexLocationResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'region' => $this->region,
        ];
    }
}
