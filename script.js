//hora
function actualizarHora() {
    const ahora = new Date(); // Obtener la fecha y hora actuales
    const fechaHora = ahora.toLocaleString('es-CL', {
        weekday: 'long',   // Día de la semana
        year: 'numeric',   // Año
        month: 'long',     // Mes
        day: 'numeric',    // Día del mes
        hour: '2-digit',   // Hora
        minute: '2-digit', // Minuto
        second: '2-digit'  // Segundo
    });

    // Mostrar la hora en el elemento con id 'fecha-hora'
    document.getElementById('fecha-hora').textContent = fechaHora;
}

// Actualizar la hora cada segundo
setInterval(actualizarHora, 1000);

// Ejecutar la función inmediatamente para mostrar la hora al cargar la página
actualizarHora();
//hora



// funcionalidad formularios
document.getElementById('formulario-contacto').addEventListener('submit', function(e) {
    e.preventDefault(); // Evita que la página se recargue

    // Mostrar mensaje de confirmación
    const mensajeConfirmacion = document.getElementById('mensaje-confirmacion');
    mensajeConfirmacion.style.display = 'block';

    // Limpiar el formulario
    document.getElementById('formulario-contacto').reset();
});

// Formulario de agregar noticia
let contadorNoticias = 0;

document.getElementById('formulario-agregar-noticia').addEventListener('submit', function(e) {
    e.preventDefault(); // Evita que la página se recargue

    // Obtener los valores del formulario
    const titulo = document.getElementById('titulo').value;
    const descripcion = document.getElementById('descripcion').value;

    // Crear la noticia
    const noticiaDiv = document.createElement('div');
    noticiaDiv.classList.add('tarjeta-articulo');
    noticiaDiv.innerHTML = `
        <h3>${titulo}</h3>
        <p><strong>Categoría:</strong> Noticias</p>
        <p>${descripcion}</p>
    `;

    // Añadir la noticia al contenedor de noticias agregadas
    document.getElementById('noticias-agregadas').appendChild(noticiaDiv);

    // Actualizar el contador de noticias
    contadorNoticias++;
    document.getElementById('total-noticias').textContent = contadorNoticias;

    // Limpiar el formulario
    document.getElementById('formulario-agregar-noticia').reset();
});
// funcionalidad formularios

