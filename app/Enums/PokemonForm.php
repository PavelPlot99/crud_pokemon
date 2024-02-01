<?php

namespace App\Enums;

use App\Models\Pokemon;

enum PokemonForm: string
{
    case Head = 'head';
    case HeadLegs = 'head_legs';
    case Fins = 'fins';
    case Wings = 'wings';

    public static function values(): array
    {
        return array_column(PokemonForm::cases(), 'value');
    }
}
