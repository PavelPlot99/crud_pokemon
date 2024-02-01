<?php

namespace App\Service;

use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Model;

class PokemonService
{
    public function storePokemon(array $data): Pokemon
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

    public function updatePokemon(Pokemon $pokemon, array $data): Pokemon
    {
        $pokemon->update($data);

        if (isset($data['images'])) {
            $pokemon->images()->delete();

            foreach ($data['images'] as $image) {
                $path = $image->store('pokemon_images', 'public');
                $pokemon->images()->create([
                    'path' => $path,
                    'imageable_type' => Model::getActualClassNameForMorph(Pokemon::class),
                ]);
            }
        }

        return $pokemon;
    }
}
