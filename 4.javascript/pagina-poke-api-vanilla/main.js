import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min';
import { displayAllPokemon, getAllPokemon } from './characters.js'
import { ciudad, costo, danger, nombre, primary, product, rol, username } from './test_destructuring.js';

console.log(`${nombre}, es de ${ciudad}`);
console.log(`${product}, cuesta $${costo}`);
console.log(`user: ${username}, rol: ${rol}`);
console.log(`set colors: danger / ${danger}, primary / ${primary}`);

/** Desestructuracion "arreglo con objetos" */
const lista = [
    { id: 1, nombre: 'Laptop', precio: 1000 },
    { id: 2, nombre: 'Teléfono', precio: 500 },
    { id: 3, nombre: 'Tablet', precio: 300 }
];

console.log(`----- Detalle de Productos ------`);
for(const producto of lista){
    //console.log(producto);
    const {id, nombre} = producto;
    console.log(`Producto Id: ${id}, Producto: ${nombre}`);
}

console.log(getAllPokemon());

displayAllPokemon();
document.querySelector('#app').innerHTML = `
    <div class="container mt-4">
        <h1 class="text-center fst-italic my-4">Pokemones</h1>
        <div class="row" id="list-pokemon"></div>
    </div>
`;