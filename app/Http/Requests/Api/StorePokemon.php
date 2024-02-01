<?php

namespace App\Http\Requests\Api;

use App\Enums\PokemonForm;
use App\Models\Location;
use App\Models\Pokemon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePokemon extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', Rule::unique(Pokemon::class, 'title')],
            'number' => ['required', 'int', Rule::unique(Pokemon::class, 'number')],
            'form' => ['required', Rule::in(PokemonForm::values())],
            'location_id' => ['required', 'int', Rule::exists(Location::class, 'id')],
            'images.*' => ['image']
        ];
    }
}
