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


// validaciones de meses y año
let dateMonth = document.getElementById('month');
dateMonth.addEventListener("blur", function(event){

    let inputValue = event.target.value // valor actual del input lo que se le esta poniendo
    // Eliminar cualquier carácter no numérico
    inputValue = inputValue.replace(/\D/g, ''); //eliminar letras o lo que sea
    dateMonth.value = inputValue;
    if (inputValue.length >= 2) {
        if(inputValue > 12 || inputValue == 0o0) {
            console.log("Se debe ingresar un numero menor a 12");
            $(dateMonth).popover({
                content: $(dateMonth).attr('data-content'),
                trigger: "manual", // Evita que el popover se muestre automáticamente al inicializar
            });
            $(dateMonth).popover('show');
            dateMonth.value = ''; //borrar donde esta la fecha
            //ocultar popover
            setTimeout(function(){
                $(dateMonth).popover('hide');
            },3600);
        } //else{}
    }else{
        alertGeneral('alertMont', 'No escribiste el fomato correcto de fecha, ejemplo: 01, 02....', 'danger');
        dateMonth.value = ''; 
    }

});

//Validar Año
let dateYear = document.getElementById('year');
dateYear.addEventListener("blur", function(event){
    let inputAnioVal = event.target.value // valor actual del input lo que se le esta poniendo
    inputAnioVal = inputAnioVal.replace(/\D/g, '');
    dateYear.value = inputAnioVal;
    let fechaActual = new Date();
    let anioAct = fechaActual.getFullYear();
    // let mesAct = fechaActual.getMonth() + 1;
    if (inputAnioVal.length == 4) {
        if(inputAnioVal < anioAct){
            // console.log('escribiste un año menor');
            dateYear.value='';
            alertGeneral('alertYear', 'Escribiste un año menor al actual', 'danger')
            
        }
    }else{
        dateYear.value = '';
        $(dateYear).popover({
            content: $(dateYear).attr('data-content'),
            trigger: "manual", // Evita que el popover se muestre automáticamente al inicializar
        });
        $(dateYear).popover('show');
        setTimeout(function(){
            $(dateYear).popover('hide');
        },2200);
    }
});

let cvvpass = document.getElementById('cvcpwd');
cvvpass.addEventListener("blur", function(event){
    let inputCvv = event.target.value // valor actual del input lo que se le esta poniendo
    inputCvv = inputCvv.replace(/\D/g, '');
    cvvpass.value = inputCvv;
    if (inputCvv.length < 3) {
        submitButton.classList.remove('btn', 'btn-success');
        submitButton.classList.add('disabled-button');
        cvvpass.value = '';
        $(cvvpass).popover({
            content: $(cvvpass).attr('data-content'),
            trigger: "manual", // Evita que el popover se muestre automáticamente al inicializar
        });
        $(cvvpass).popover('show');
        setTimeout(function(){
            $(cvvpass).popover('hide');
        },2200);
    }
    
});


//Validar que no este vacio el form
// Obtener todos los inputs dentro del formulario por su ID
let formularioCard = document.querySelectorAll('#card-form input[type="text"]:not(.search-box), #card-form input[type="password"], #card-form input[type="tel"]');


// Obtener el botón de pago por su ID
let submitButton = document.querySelector('#card-form input[type="submit"]');


//Verificar para activar el boton correctamente
function verificarInputs(){
    for(let i= 0; i<formularioCard.length; i++){
        if(formularioCard[i].value === ''){
            // alertGeneral('alertYear', 'Por favor no dejes datos vacios', 'danger')
            return false;

        }
    }
    return true; // Si todos los inputs tienen valores, retornar true
}

// Evento que se activa cuando se modifica un input
for (let i = 0; i < formularioCard.length; i++) {
    formularioCard[i].addEventListener('input', function() {
        // Verificar si todos los inputs tienen valores
        if (verificarInputs()) {
            submitButton.classList.remove('disabled-button'); // Remover la clase disabled-button
            submitButton.classList.add('btn', 'btn-success'); // Agregar la clase btn-success
        } else {
            submitButton.classList.add('disabled-button'); // Agregar la clase disabled-button
            submitButton.classList.remove('btn', 'btn-success'); // Remover la clase btn-success
        }
    });
}

document.getElementById('btnMod').addEventListener('click',function(){
    window.location.href = 'https://seresderiqueza.mx/soporte-pagos';
});

document.getElementById('modalCls').addEventListener('click', function(){
    $('#modalErr').modal('hide');
});