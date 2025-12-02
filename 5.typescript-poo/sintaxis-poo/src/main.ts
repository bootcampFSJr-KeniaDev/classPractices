import './style.css'
import typescriptLogo from './typescript.svg'
import viteLogo from '/vite.svg'
import { setupCounter } from './counter.ts'
import { nombre, PI, frutas, user, saludar, suma, libro } from './sintaxis.ts'
import { Coach } from './poo/coach.ts'
import { Estudiante } from './poo/estudiante.ts'


console.log("Nombre:", nombre);
console.log("PI:", PI);
console.log("Frutas:", frutas);
console.log("Usuario:", user);
console.log(saludar("Kenia"));
console.log("Suma 5 + 3 =", suma(5, 3));
console.log("Libro:", libro);


// Programacion Orientada a Objetos (POO)
console.log("----- Programacion Orientada a Objetos -----");
console.log("----- Coach -----");
const coach = new Coach("Kenia Paiz", 27, "Salvadoreña", "paizkenia@gmail.co", ["FullStack", "Python"])
console.log(coach.mostrarDetalles())
console.log(coach.saludar())

console.log("----- Estudiante -----");
const estudiante = new Estudiante("Juan Perez", 20, "Mexicano", "juanito.perez@gmail.com", "FullStack Jr")
console.log(estudiante.mostrarDetalles())


document.querySelector<HTMLDivElement>('#app')!.innerHTML = `
  <div>
    <a href="https://vite.dev" target="_blank">
      <img src="${viteLogo}" class="logo" alt="Vite logo" />
    </a>
    <a href="https://www.typescriptlang.org/" target="_blank">
      <img src="${typescriptLogo}" class="logo vanilla" alt="TypeScript logo" />
    </a>
    <h1>Vite + TypeScript</h1>
    <div class="card">
      <button id="counter" type="button"></button>
    </div>
    <p class="read-the-docs">
      Click on the Vite and TypeScript logos to learn more
    </p>
  </div>
`

setupCounter(document.querySelector<HTMLButtonElement>('#counter')!)
