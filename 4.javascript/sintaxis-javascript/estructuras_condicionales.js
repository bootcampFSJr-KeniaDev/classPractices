//Estructuras Condicionales

//Uso del if-else (evalua una condicion)
let edad = 10;
if(edad >= 18){
    console.log("Eres mayor de edad");
}else{
    console.log("Eres menor de edad");
}

//verificar si el numero es par o impar
function parImpar(numero){
    if((numero % 2) == 0){
        console.log("El numero es par")
    }else{
        console.log("El numero es impar")
    }
}

parImpar(10)
parImpar(21)
parImpar(3)

//evaluar varias condiciones (switch / if - else if - else)
//uso del if-else if-else

let nota_examen = 11;
if(nota_examen >= 7 && nota_examen <=10){
    console.log("Aprobo el examen, felicidades")
    //&&(AND) ||(OR)
}else if(nota_examen >= 5.5 && nota_examen <= 6.9){
    console.log("Puedes recuperar el examen! intentalo de nuevo!")
}else if(nota_examen < 5.5){
    console.log("Reprobo el examen, :(")
}else{
    console.log("Ingresa la nota del 1 al 10")
}

/** si la persona compra entre 5 a 10 cafes tendra un descuento del 20%
si ala persona compra mas de 10 cafes a 20 cafes tendra un descuento del 40%
y si la persona compra mas de 20 cafes tendra un descuento del 50% */
function cafeteria(cantidad_cafe){

    if(cantidad_cafe < 5){
        console.log("Tu compra no tiene descuento")
    }else if(cantidad_cafe >= 5 && cantidad_cafe <= 10){
        console.log("Tu compra tendra un descuento del 20%")
    }else if(cantidad_cafe > 10 && cantidad_cafe <= 20){
        console.log("Tu compra tendra un descuento del 40%")
    }else{
        console.log("Tu compra tendra un descuento del 50%")
    }
}

cafeteria(7)
cafeteria(30)
cafeteria(12)
cafeteria(2)


//uso del switch
function escogerFormaPago(forma_pago){

    switch(forma_pago){
        case "efectivo":
            console.log("Escogiste pagar en efectivo!")
            break;

        case "tarjeta":
            console.log("Escogiste pagar con tarjeta de credito!")
            break;

        case "paypall":
            console.log("Escogiste pagar por medio de paypal!")
            break;

        case "bitcoin":
            console.log("Escogiste pagar por medio de bitcoins!")
            break;

        default:
            console.log("Escoge una forma de pago correcta")
    }
}

escogerFormaPago("paypall")
escogerFormaPago("efectivo")
escogerFormaPago("cuenta")