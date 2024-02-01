<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StorePokemon;
use App\Http\Resources\Api\IndexPokemonResource;
use App\Models\Pokemon;
use App\Service\PokemonService;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index ()
    {

    }

    public function store (StorePokemon $request, PokemonService $service)
    {
        return IndexPokemonResource::make($service->storePokemon($request->validated()));
    }

    public function show (Pokemon $pokemon)
    {
        return IndexPokemonResource::make($pokemon);
    }

    public function update ()
    {}

    public function destroy ()
    {}
}
