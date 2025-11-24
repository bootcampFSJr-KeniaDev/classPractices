// Estructuras Repetitivas (bucles)

//ejemplo sin utilizar un bucles
//hagamos la tabla 5

// (1 * 5) = 5;
// (2 * 5) = 10;
// (3 * 5) = 15;
// (4 * 5) = 20;
// (5 * 5) = 25;
// (6 * 5) = 30;
// (7 * 5) = 35;
// (8 * 5) = 40;
// (9 * 5) = 45;
// (10 * 5) = 50;

// uso del for
function usoFor(){
    /**
     * contador de inicio
     * condicion del contador (para saber si continua o se detiene el bucle)
     * incremento / decremento del contador
     */
    for(let i = 1; i <= 50; i++){ //i = i + 1
        /**
         * 1 + 1
         * 2 + 1
         * 3
         *  ..
         * 49 + 1
         * 50 + 1
         * 
         */
        console.log(i)
    }

    console.log("************ contador en decremento ****************")
    for(let j = 25; j >= 10; j--){ 

        console.log(j)
    }
}

//usoFor()

function tablaMultiplicar(tabla){
    for(let contador = 1; contador <= 10; contador++){
        
        let resultado = contador * tabla;
        //1 * 5 = ?
        console.log(`${contador} * ${tabla} = ${resultado}`)
    }
}

tablaMultiplicar(5)
tablaMultiplicar(3)


//uso del while
//el while es perfecto para utilizarlo cuando no sabemos cuantas veces se repetira el bucle
function usoWhile(){
    let nombre = "";

    //solo solicita una condicion
    while(nombre === ""){
        nombre = prompt("Ingresa tu nombre")
    }

    console.log(`Hola, bienvenido ${nombre}`)
}

//usoWhile()

console.log("********* USO DEL WHILE ****")
function tablaMultiplicarWhile(tabla){
    let contador = 1;

    while(contador <= 10){
        let resultado = contador * tabla;
        console.log(`${contador} * ${tabla} = ${resultado}`)
        contador++
    }

}

tablaMultiplicarWhile(8)

console.log("********* USO DEL DO WHILE ****")
//uso del do while
function usoDOWhile(tabla){
    let contador = 13;

    //primero hace y despues condiciona
    do{
        let resultado = contador * tabla;
        console.log(`${contador} * ${tabla} = ${resultado}`)
        contador++
    }
    while(contador <= 10)
}

usoDOWhile(10)