import {BaseApiService} from "./BaseApiService.js";

const ServiceAction = {
    GET_POKEMONS: {
        url:'pokemon',
        method: 'GET',
    },
    GET_POKEMON: {
        url: 'pokemon/:id',
        method: 'GET',
    }
}

export class PokemonApiService extends BaseApiService {
    async getPokemons(params){
        return await  this.buildRequest({
            ...ServiceAction.GET_POKEMONS,
            params
        })
    }

    async getPokemon(queryParams){
        return await  this.buildRequest({
            ...ServiceAction.GET_POKEMON,
            queryParams,
        })
    }
}

const pokemonApiService = new PokemonApiService()

export {
    pokemonApiService,
}
