//Hacer Alerts Dinamicos
let contenedorAlerts = document.getElementById('alertContainer');
// Función para mostrar el alerta
function alertGeneral(id, mensaje, tipo) {
    let alerta = document.getElementById(id);
    if (!alerta) {
        alerta = document.createElement('div');
        alerta.id = id;
        alerta.className = `alert alert-${tipo} fixed-top text-center`;
        alerta.setAttribute('role', 'alert');
        alerta.textContent = mensaje;
        contenedorAlerts.appendChild(alerta);
    } else {
        alerta.textContent = mensaje;
    }

    // Mostrar el alerta
    $(alerta).fadeIn();

    // Ocultar el alerta después de 3 segundos (3000 milisegundos)
    setTimeout(function() {
        $(alerta).fadeOut();
    }, 3000);
}
