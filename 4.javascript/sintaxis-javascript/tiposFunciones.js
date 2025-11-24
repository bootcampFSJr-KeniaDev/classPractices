console.log(sumar())

//funcion declarativa
function sumar(){
    let numero1 = 20;
    let numero2 = 30;
    let total = numero1 + numero2;
    return `El resultado de la suma es: ${total}`;
}

console.log(sumar())

function sumarConParametros(numero1, numero2){
    let total = numero1 + numero2;
    return `El resultado de la suma es: ${total}`; //retorna la respuesta pero no te lo imprime
}

//expresion de funcion
const restar = function(a, b){
    let total = a - b;
    return `El resultado de la resta es: ${total}`;
}

console.log(restar(10, 5))

//funcion de flecha (una de las mas utilizadas)
const multiplicar = (a, b) => {
    let total = a * b;
    return `El resultado de la resta es: ${total}`;
}

console.log(multiplicar(10, 2))