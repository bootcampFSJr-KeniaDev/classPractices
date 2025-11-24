/** Ejercicio 1: Pide al usuario su edad y muestra:
        “Eres menor de edad” si tiene menos de 18.
        “Eres adulto” si está entre 18 y 64.
        “Eres adulto mayor” si tiene 65 o más. */

let edad = parseInt(prompt("¿Cuál es tu edad?"));

if (edad < 18) {
    console.log("Eres menor de edad");
} else if (edad < 65) {
    console.log("Eres adulto");
} else {
    console.log("Eres adulto mayor");
}

/** Ejercicio 2: Mostrar el día de la semana según un número. */
let dia = 3;
let nombreDia;

switch (dia) {
    case 1:
        nombreDia = "Lunes";
        break;
    case 2:
        nombreDia = "Martes";
        break;
    case 3:
        nombreDia = "Miércoles";
        break;
    case 4:
        nombreDia = "Jueves";
        break;
    case 5:
        nombreDia = "Viernes";
        break;
    case 6:
        nombreDia = "Sábado";
        break;
    case 7:
        nombreDia = "Domingo";
        break;
    default:
        nombreDia = "Número inválido";
}
console.log("Hoy es:", nombreDia);
