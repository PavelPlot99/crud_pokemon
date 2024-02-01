<?php

namespace App\Query;

use App\Models\Pokemon;

class PokemonQuery
{
    public function getPokemons($data)
    {
        $sort = $data['sort'] ?? null;
        $locationId = $data['location_id'] ?? null;

        $pokemonsQuery = Pokemon::query()->with(['location.region', 'images']);

        if(isset($sort)){
            $pokemonsQuery->orderBy('number', $sort);
        }
        if(isset($locationId)){
            $pokemonsQuery->where('location_id', $locationId);
        }

        return $pokemonsQuery->get();
    }
}
