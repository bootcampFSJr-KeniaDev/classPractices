
// Usa un for para mostrar los números del 1 al 10.
function contador(){
    for(let i=0; i <= 10; i++){
        console.log(i)
    }
}

/**
 * IMPORTANTE: El for se usa cuando sabemos cuántas veces queremos repetir algo.
 */

// Usa un while para pedir la contraseña hasta que el usuario escriba "1234".
function password(){
    let password = prompt("Introduce la contraseña :");
    
    while (password !== "1234"){
        password = prompt("❌ Incorrecta. Intenta de nuevo:");
    }
    console.log("Acceso concedido");
}

//password();

/**
 * IMPORTANTE: El while se usa cuando no sabemos cuántas veces se repetirá el ciclo, 
 * pero queremos que se ejecute mientras una condición sea verdadera.
 */

// Usa un do while para mostrar un menú al menos una vez, incluso si la opción es salir.
function menu(){
    let opcion;

    do {
        console.log("===== MENÚ PRINCIPAL =====");
        console.log("1. Mostrar saludo");
        console.log("2. Mostrar fecha actual");
        console.log("3. Salir");

        opcion = prompt("Elige una opción (1, 2 o 3):");

        switch (opcion) {
            case "1":
                console.log("👋 ¡Hola! Bienvenido al programa.");
            break;
            case "2":
                console.log("📅 La fecha actual es:", new Date().toLocaleDateString());
            break;
            case "3":
                console.log("👋 Saliendo del menú...");
            break;
            default:
                console.log("⚠️ Opción no válida. Intenta de nuevo.");
        }

        console.log("");
    } while (opcion !== "3");
}

menu();

/**
 * IMPORANTE: El do...while se ejecuta al menos una vez, aunque la condición sea falsa.
 */