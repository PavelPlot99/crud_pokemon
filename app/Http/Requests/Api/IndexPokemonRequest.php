<?php

namespace App\Http\Requests\Api;

use App\Models\Location;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class IndexPokemonRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'sort' => [Rule::in(['asc', 'desc'])],
            'location_id' => [Rule::exists(Location::class, 'id')]
        ];
    }
}
