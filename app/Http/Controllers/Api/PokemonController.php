<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\IndexPokemonRequest;
use App\Http\Requests\Api\StorePokemonRequest;
use App\Http\Requests\Api\UpdatePokemonRequest;
use App\Http\Resources\Api\IndexPokemonResource;
use App\Models\Pokemon;
use App\Query\PokemonQuery;
use App\Service\PokemonService;

class PokemonController extends Controller
{
    public function index (IndexPokemonRequest $request, PokemonQuery $query)
    {
       return IndexPokemonResource::collection($query->getPokemons($request->validated()));
    }

    public function store (StorePokemonRequest $request, PokemonService $service)
    {
        return IndexPokemonResource::make($service->storePokemon($request->validated()));
    }

    public function show (Pokemon $pokemon)
    {
        return IndexPokemonResource::make($pokemon);
    }

    public function update (Pokemon $pokemon, UpdatePokemonRequest $request, PokemonService $service)
    {
        return IndexPokemonResource::make($service->updatePokemon($pokemon, $request->validated()));
    }

    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
    }
}
