
// Uso de variables y constantes
export let nombre: string = "Juan";
export const PI: number = 3.1416;

// Tipos de datos
let edad: number = 25;
let activo: boolean = true;
let mensaje: string = "Hola mundo";

// Arreglos
let numeros: number[] = [1, 2, 3, 4];
export let frutas: string[] = ["🍎", "🍐", "🍇","🍉"];

// Objetos
export let libro: { titulo: string; autor: string; paginas: number } = {
    titulo: "Aprendiendo TypeScript",
    autor: "Carlos",
    paginas: 250,
};

// type = definir nuevos tipos
type Usuario = {
    nombre: string;
    edad: number;
};

export const user: Usuario = { nombre: "Ana", edad: 30 };

//Declaración de funciones
export function saludar(nombre: string) {
    return `Hola ${nombre}`;
}

export const suma = (a: number, b: number) => {
    return a + b;
};

