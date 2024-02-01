<?php

use App\Http\Controllers\Api\PokemonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('pokemons')->group(function() {
   Route::get('/', [PokemonController::class, 'index'])->name('pokemon.index');
   Route::get('/{pokemon}', [PokemonController::class, 'show'])->name('pokemon.show');
   Route::patch('/{pokemon}', [PokemonController::class, 'update'])->name('pokemon.update');
   Route::post('/', [PokemonController::class, 'store'])->name('pokemon.store');
});
