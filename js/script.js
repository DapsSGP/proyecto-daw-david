// Pequeño ejemplo de JS: muestra un mensaje mientras escribes
const nombreInput = document.getElementById('nombre');
const mensajeJS = document.getElementById('mensajeJS');

nombreInput.addEventListener('input', () => {
  if (nombreInput.value.trim() !== "") {
    mensajeJS.textContent = `Hola ${nombreInput.value}, ¡pronto serás saludado!`;
  } else {
    mensajeJS.textContent = "";
  }
});
