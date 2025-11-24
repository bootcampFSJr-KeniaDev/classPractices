const section = document.querySelector('section');
let currentPage = 1;
let totalPages = 0;


const getEmoji = (status) => {
    switch(status) {
        case 'Alive':
            return '❤️'; // Corazón para estado vivo
        case 'Dead':
            return '☠️'; // Calavera para estado muerto
        default:
            return '❓'; // Emoji de interrogación para estado desconocido
    }
}

const getPersonajes = async (page) => {
    try{
        const response = await fetch(`https://rickandmortyapi.com/api/character/?page=${page}`);
        const data = await response.json();
        console.log(data.results);

        // Actualiza el número total de páginas
        totalPages = data.info.pages;

        data.results.map((personaje) => {
            const card = document.createElement('div');
            card.classList.add('col-md-4', 'mb-4');

            card.innerHTML += `
                <div class="card">
                    <img src=${personaje.image} class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">${personaje.name}</h5>
                    <p class="card-text">
                        <strong>estado: </strong>${getEmoji(personaje.status)} <br>
                        <strong>especie: </strong>${personaje.species} <br>
                        <strong>genero: </strong>${personaje.gender} <br>
                        <strong>localidad: </strong>${personaje.location.name} <br>
                    </p>
                </div>
            `;

            section.appendChild(card)
        })

        

    }catch(error){
        console.log(`Error ${error}`);
    }
}

// Función para cargar la página anterior
const loadPreviousPage = () => {
    if (currentPage > 1) {
        currentPage--;
        section.innerHTML = ''; // Limpia el contenido actual
        getPersonajes(currentPage);
    }
}

// Función para cargar la página siguiente
const loadNextPage = () => {
    if (currentPage < totalPages) {
        currentPage++;
        section.innerHTML = ''; // Limpia el contenido actual
        getPersonajes(currentPage);
    }
}

// Llama a la función para obtener y mostrar los personajes en la primera página
getPersonajes(currentPage);