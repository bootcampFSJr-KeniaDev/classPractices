// Acceder a los elementos
const titulo = document.getElementById("titulo");
const mensaje = document.querySelector(".mensaje");
const boton = document.getElementById("btnCambiar");
const formulario = document.getElementById("formulario");
const inputNombre = document.getElementById("nombre");

// Manipular elementos
titulo.style.color = "darkblue";
mensaje.textContent = "Listos para modificar el DOM";

// Escuchar eventos
boton.addEventListener("click", () => {
    mensaje.textContent = "¡El mensaje ha cambiado!";
    titulo.style.color = "crimson";
});

inputNombre.addEventListener("change", () => {
    console.log("El usuario escribió:", inputNombre.value);
});

formulario.addEventListener("submit", (evento) => {
    evento.preventDefault(); // evita que se recargue la página
    alert(`Hola ${inputNombre.value}, ¡formulario enviado!`);
});
