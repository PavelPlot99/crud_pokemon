<?php

namespace App\Http\Requests\Api;

use App\Models\Pokemon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAbilityRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title_ru' => ['required', 'string', 'regex:/^[А-Яа-я\s\-]+$/u'],
            'title_en' => ['required', 'string', 'regex:/^[A-Za-z\s\-]+$/u'],
            'images.*' => ['image'],
            'pokemon_id' => [Rule::exists(Pokemon::class, 'id'), 'required']
        ];
    }
}
