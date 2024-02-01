<?php

namespace App\Service;

use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Model;

class PokemonService
{
    public function storePokemon($data): Pokemon
    {
        $pokemon = Pokemon::query()->create($data);

        if (isset($data['images'])) {
            foreach ($data['images'] as $image) {
                $path = $image->store('pokemon_images','public');

                $pokemon->images()->create([
                    'url' => $path,
                    'imageable_type' => Model::getActualClassNameForMorph(Pokemon::class),
                ]);
            }
        }
        return $pokemon;
    }
}
