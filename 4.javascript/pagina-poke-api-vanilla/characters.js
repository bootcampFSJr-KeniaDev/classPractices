const baseURL = 'https://pokeapi.co/api/v2/pokemon/';

// Función para obtener todos los Pokémon (limitando a 150 para evitar sobrecarga)
export async function getAllPokemon() {
    try {
        const response = await fetch(`${baseURL}`);
        const data = await response.json();
        const { results } = data; // Desestructuración para obtener la lista de resultados
        return results;
    } catch (error) {
        console.error('Error al obtener la lista de Pokémon:', error);
        return [];
    }
}

// Función para obtener detalles de un Pokémon individual
export async function getPokemonDetails(url) {
    try {
        const response = await fetch(url);
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error al obtener detalles del Pokémon:', error);
        return null;
    }
}

// // Función para mostrar todos los Pokémon en la página
export async function displayAllPokemon() {
    const pokemonList = await getAllPokemon();

    //DENTRO DEL MAP(), NO SE PERMITE EL AWAIT POR LA DEVOLUCION DE LLAMADA

    for (const pokemon of pokemonList) {
        //Desestructuramos los elementos del arreglo
        const { name, url } = pokemon;
        const details = await getPokemonDetails(url);

        if(details){
            const { sprites, species, abilities } = details;
            //sprite hace referencia a una nueva variable
            const { front_default: sprite } = sprites;
            const { name: specie } = species;

            //Mapeando las habilidades
            const abilitiesPoke = abilities.map(({ ability: { name } }) => name);
            //const abilitiesPoke = abilities.map((item) => item.ability.name);

            //accediendo al contenedor
            const pokemonContainer = document.getElementById('list-pokemon');
            const pokemonElement = document.createElement('div');
            pokemonElement.classList.add('col-md-3', 'border', 'border-secondary', 'text-center');
            pokemonElement.innerHTML = `
                <h4 class="text-primary fst-italic">${name.toUpperCase()}</h4>
                <img src="${sprite}" alt="${name}" class="img-fluid">
                <p><strong>species: </strong> ${specie}</p>
                <p><strong>abilities: </strong> ${abilitiesPoke.join(', ')}</p>
            `;
            pokemonContainer.appendChild(pokemonElement);
        }
    }
}

// // Llamada para mostrar todos los Pokémon al cargar la página
// displayAllPokemon();
