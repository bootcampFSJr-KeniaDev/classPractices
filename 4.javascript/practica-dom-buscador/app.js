// Arreglo de objetos
const estudiantes = [
    { nombre: "Ana", edad: 20 },
    { nombre: "Carlos", edad: 22 },
    { nombre: "María", edad: 19 },
    { nombre: "Pedro", edad: 23 },
    { nombre: "Lucía", edad: 21 }
];

// 1. Acceder a los elementos del DOM
const input = document.getElementById("buscador");
const boton = document.querySelector("#btnBuscar");
const resultados = document.getElementById("resultados");

// 2. Función para buscar
function buscarEstudiante() {
    const texto = input.value.toLowerCase();

    // Filtrar los estudiantes
    const filtrados = estudiantes.filter(est =>
        est.nombre.toLowerCase().includes(texto)
    );

    // Limpiar resultados
    resultados.innerHTML = "";

    // Si no hay resultados
    if (filtrados.length === 0) {
        resultados.textContent = "No se encontró ningún estudiante.";
        return;
    }

    // Mostrar resultados
    filtrados.forEach(est => {
        resultados.innerHTML += `
            <p><strong>${est.nombre}</strong> — Edad: ${est.edad}</p>
        `;
    });
}

boton.addEventListener("click", buscarEstudiante);

input.addEventListener("input", buscarEstudiante);
