import { pokemonApiService } from "../../services/PokemonApiService.js";

class PokemonsPage {
    constructor() {
        this.pokemonContainer = document.getElementById('pokemon-container');
        this.sortAscButton = document.getElementById('sort-asc');
        this.sortDescButton = document.getElementById('sort-desc');
        this.pokemons = [];
    }

    async run() {
        await this.getPokemons();
        this.renderPokemons();
        this.setupEventListeners();
    }

    async getPokemons() {
        try {
            for (let id = 1; id <= 5; id++) {
                const pokemon = await pokemonApiService.getPokemon({ id });
                this.pokemons.push(pokemon);
            }
        } catch (error) {
            console.error('Ошибка загрузки покемонов:', error);
        }
    }

    renderPokemons() {
        this.pokemonContainer.innerHTML = '';

        this.pokemons.forEach(pokemon => {
            const pokemonElement = this.createPokemonElement(pokemon);
            this.pokemonContainer.appendChild(pokemonElement);
        });
    }

    createPokemonElement(pokemon) {
        const pokemonElement = document.createElement('div');
        pokemonElement.classList.add('bg-white', 'rounded-lg', 'p-4', 'shadow-md');

        const nameElement = document.createElement('h2');
        nameElement.textContent = pokemon.name;
        nameElement.classList.add('text-xl', 'font-semibold', 'text-center', 'mb-2');

        const imageElement = document.createElement('img');
        imageElement.src = pokemon.sprites.front_default;
        imageElement.alt = pokemon.name;
        imageElement.classList.add('mx-auto', 'mb-2');

        const typesElement = document.createElement('p');
        typesElement.textContent = `Типы: ${pokemon.types.map(type => type.type.name).join(', ')}`;
        typesElement.classList.add('text-sm', 'text-center', 'mb-2');

        const abilitiesElement = document.createElement('p');
        abilitiesElement.textContent = `Способности: ${pokemon.abilities.map(ability => ability.ability.name).join(', ')}`;
        abilitiesElement.classList.add('text-sm', 'text-center', 'mb-2');

        pokemonElement.appendChild(nameElement);
        pokemonElement.appendChild(imageElement);
        pokemonElement.appendChild(typesElement);
        pokemonElement.appendChild(abilitiesElement);

        return pokemonElement;
    }

    setupEventListeners() {
        this.sortAscButton.addEventListener('click', () => {
            this.sortPokemonsAsc();
        });

        this.sortDescButton.addEventListener('click', () => {
            this.sortPokemonsDesc();
        });
    }

    sortPokemonsAsc() {
        this.pokemons.sort((a, b) => a.id - b.id);
        this.renderPokemons();
    }

    sortPokemonsDesc() {
        this.pokemons.sort((a, b) => b.id - a.id);
        this.renderPokemons();
    }
}

export const pokemonsPage = new PokemonsPage();

