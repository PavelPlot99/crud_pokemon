<?php

namespace App\Http\Requests\Api;

use App\Enums\PokemonForm;
use App\Models\Location;
use App\Models\Pokemon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePokemonRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => [Rule::unique(Pokemon::class, 'title')],
            'number' => [Rule::unique(Pokemon::class, 'number')],
            'form' => [Rule::in(PokemonForm::values())],
            'location_id' => [Rule::exists(Location::class, 'id')],
            'images.*' => ['image']
        ];
    }
}
