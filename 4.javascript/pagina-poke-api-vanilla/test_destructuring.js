/** Desestructuracion de Objetos y Arreglos */

/**La desestructuración de objetos permite extraer valores de un objeto 
 * y asignarlos a variables individuales de manera concisa. */

const persona = {
    nombre: 'Juan',
    edad: 30,
    ciudad: 'Madrid'
};

export const { ciudad, nombre } = persona;

//Objetos de variables personalizadas
const producto = {
    id: 1,
    nombre: 'Laptop',
    precio: 1000
}

export const {nombre: product, precio: costo} = producto;

//Desestructuración con valores por defecto
const usuario = {
    username: 'jdoe',
    email: 'jdoe@example.com'
};

export const { username, rol = 'usuario' } = usuario;

/**La desestructuración de arreglos permite extraer elementos de un arreglo 
 * y asignarlos a variables individuales. */
const colors = ['blue', 'green', 'orange', 'red'];
export const [primary, success, warning, danger] = colors;

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


