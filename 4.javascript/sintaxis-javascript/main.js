
console.log("Hola desde un archivo de Javascript externo");

// comentario en una linea
/* comentario mas largo
    ....
*/

// declaracion de variables
let nombre = "Juan"
var nombre2 = "Sara" //forma antigua

//llamando y cambiando el valor de una variable
nombre = "Jose";

let saludo = "";
saludo = "";

//sobredeclarando una variable que ya existe
var saludo2 = "";
var saludo2 = "";

console.log(nombre)

// constantes: representa un dato fijo
const PI = 3.1416; 
console.log(PI);

// Tipos de datos
let apellido = "Perez"; //string
let edad = 25; //int
let decimal = 1.56; //double o float
let esEmpleado = true; //booleano
let esCasado = false; //booleano
//null vs undefined
let manzana = null; //declaramos a proposito que la variable esta vacia
console.log(manzana)
manzana = "🍎"; //string
console.log(manzana); 

let pera; //undefined
console.log(pera)
pera = "🍐"; //string
console.log(pera)
//devolviendo el tipo de dato de una variable
console.log(typeof esEmpleado)
console.log(typeof manzana)
console.log(typeof decimal)
console.log(typeof edad)

//operaciones aritmeticas
let a = 10;
let b = 3;

console.log("********** Operadores Aritmeticos ************")

console.log(a + b)
console.log(a - b)
console.log(a * b)
console.log(a / b)
console.log(a % b) //modulo (MOD)
console.log(Math.pow(a, b)) // a ** b

console.log("********** Operadores de Comparacion ************")

let x = 10;
let y = "10";

console.log(x == y); //comparamos si las 2 variables tienen el mismo valor
//(===) representan algo mas estricto
console.log(x === y); //comparamos si las 2 variables tienen el mismo valor & EL MISMO TIPO DE DATO
console.log(10 > 4); //mayor que
console.log(10 >= 4); //mayor o igual que
console.log(10 < 4); //menor que
console.log(10 <= 4); //menor o igual que
console.log(x != y); //comparar si las 2 variables son distintas
console.log(x !== y); //compara si las 2 variables son distintas en VALOR & TIPO DE DATO

console.log("********** Operadores Logicos ************")
let edadUsuario = 20;
//utilizando el operador AND (&&)
console.log(edadUsuario > 10 && edadUsuario <= 30); //true
//utilizando el operador OR (||)
console.log(edadUsuario > 10 || edadUsuario <= 15); //true
//utilizando el operador NOT (!)
console.log(!(edadUsuario < 18)); //invertir el valor booleano

console.log("********** Operadores de Asignacion ************")
let puntos = 10;
console.log(puntos += 5); //15
console.log(puntos -= 2); //13
console.log(puntos *= 2); //26
console.log(puntos /= 2); //13

console.log("********** Uso de funciones ************")
//una funcion es un bloque de codigo que podemos reutilizar

let numero1 = 20;
let numero2 = 30;
let total = numero1 + numero2;
//forma de concatenar elementos (+)
//console.log("El resultado de la suma es: " + total);
//otra forma
console.log(`El resultado de la suma es: ${total}`);


let numero3 = 100;
let numero4 = 1050;
let total1 = numero3 + numero4;
console.log(`El resultado de la suma es: ${total1}`);

//funcion declarativa

console.log("********** Utilizando sin parametros ni argumentos ************")
//funcion sin parametros
function sumar(){
    let numero1 = 20;
    let numero2 = 30;
    let total = numero1 + numero2;
    return `El resultado de la suma es: ${total}`; //retorna la respuesta pero no te lo imprime
}
console.log(sumar()); //sumando 20 + 30
console.log(sumar()); //sumando 20 + 30

console.log("********** Utilizando parametros y argumentos ************")

//funcion con parametros
function sumarConParametros(numero1, numero2){
    let total = numero1 + numero2;
    return `El resultado de la suma es: ${total}`; //retorna la respuesta pero no te lo imprime
}

//llamas a la funcion
//agregamos los argumentos en la funcion
console.log(sumarConParametros(12,45)); //57
console.log(sumarConParametros(100,30)); //130
console.log(sumarConParametros(123,45));

