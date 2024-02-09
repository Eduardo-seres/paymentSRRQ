// Se carga el Form para generar token en conekta de la card
$(document).ready(function() {
    // getQueryParams();
    //For Card Number formatted input
    var cardNum = document.getElementById('cr_no');
    cardNum.onkeyup = function (e) {
        if (this.value == this.lastValue) return;
        var caretPosition = this.selectionStart;
        var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
        var parts = [];
        
        for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
            parts.push(sanitizedValue.substring(i, i + 4));
        }
        
        for (var i = caretPosition - 1; i >= 0; i--) {
            var c = this.value[i];
            if (c < '0' || c > '9') {
                caretPosition--;
            }
        }
        caretPosition += Math.floor(caretPosition / 4);
        
        this.value = this.lastValue = parts.join('-');
        this.selectionStart = this.selectionEnd = caretPosition;
    }
   ////////////////////////////

   //ENVIAR A TOKENIZAR LA CARD LADO CLIENT
    let $form = $("#card-form");

    Conekta.setPublicKey('key_EM2HefqTPetMnhD9r4F3Rzr'); //Conekta Key(Public)

    let conektaSuccessResponseHandler = function(token) {
        console.log("Token de Conekta:", token.id);
        let tokerizacion = token.id
        // $form.trigger("reset");
        createCustomer(tokerizacion);
    };

    let conektaErrorResponseHandler = function(response) {
        $form.find(".card-errors").text(response.message_to_purchaser);
        alertGeneral('alertMont', 'Hubo un error en el pago favor de comunicarse con soporte@seresderiqueza.com', 'danger');//Fallo al tokenizar
        $form.find("button").prop("disabled", false);
    };

    document.getElementById("card-form").addEventListener("submit", function(evt) {
        evt.preventDefault();
        let $form = $("#card-form");
        $form.find("button").prop("disabled", true);

        
        // Obtener el número de tarjeta y eliminar los guiones
        let cardNumber = $form.find("#cr_no").val().replace(/-/g, '');
        $form.find("#cr_no").val(cardNumber);

        Conekta.Token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
    });

    let titleVariable = (producto == '01 Riqueza Infinita'? 'Riqueza Infinita': (producto == 'Incubadora Libertad Financiera') ? 'Incubadora Libertad Financiera' : 'Error'  );
    let precioT = (monto == 'fothandnnhns' ? '$4997' : monto == 'sixtnnhunsev' ? '$16997' : 'error');
    const productTittle= document.getElementById('principal-prod');
    const precioTittle= document.getElementById('principal-prec');
    productTittle.innerHTML = `<i class="fa-solid fa-circle-check"></i>&nbsp;${titleVariable}`;
    precioTittle.textContent = precioT;

});

//Enviar la tokerización de la creditCard y datos del user
function createCustomer(tokencrd){
    document.querySelector('.loader-container').style.display = 'block';
    let nombre = document.getElementById('name_us').value;
    let correo = document.getElementById('email').value;
    let telefono = document.getElementById('tel_phone').value;
    let msi = document.getElementById('selectmonth').value;
    // debugger;
    //Monto de acuerdo al ID
    precio = (monto == 'fothandnnhns'? 499700 : monto == 'sixtnnhunsev' ? 1699700 : null );
     // Obtener el token CSRF del meta tag en el documento HTML
      if(precio !== null){
        let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        let data = {
            nombre: nombre,
            correo: correo,
            telefono: telefono,
            planmsi: msi,
            _token: csrfToken,
             tokencrd: tokencrd,
             precio: precio,
             vendedor: utmSource,
             producto: producto,
             generacion: generacion
        };
    
        $.ajax({
            type:"POST",
            url:'/procesar-pago',
            data: data,
            success: function(response) {
                if (response.responseData) {
                    document.querySelector('.loader-container').style.display = 'none';
                    alertGeneral('alertMont', '¡Pago completado con éxito!', 'info');//Todo correcto
                    // Redirigir a la página de agradecimiento
                    setTimeout(function(){
                        window.location.href = 'https://www.google.com';
                    },3500);
                    
                }
            },
            error: function(xhr, status, error) {
                document.querySelector('.loader-container').style.display = 'none';
                alertGeneral('alertMont', '¡Hubo un error al generar tu pago, por favor contactate con el equipo de soporte!', 'danger');//Fallo al tokenizar
                setTimeout(function(){
                    window.location.href = 'https://secure.seresderiqueza.com/pagina-vencida3zly3waa';
                },3500);
               
            }
            
        });

     }else{
        window.location.href = 'https://secure.seresderiqueza.com/pagina-vencida3zly3waa';
     }
    
}

//Obtener los parametros msi, vendedor y product
// Definir la función getQueryParams
function getQueryParams() {
    let queryParams = window.location.search;
    let urlParams = new URLSearchParams(queryParams);
    
    // Obtener el valor de los parámetros de consulta
    let utmSource = urlParams.get('utm_source');
    let cfUvid = urlParams.get('cf_uvid');
    let monto = urlParams.get('mnt');
    let generacion = urlParams.get('algn');
    let producto = urlParams.get('producto');

    return { utmSource, cfUvid, monto, generacion, producto };
}

// // Llamar a la función y obtener los valores de los parámetros de consulta
 const { utmSource, cfUvid , monto , generacion, producto} = getQueryParams();
// Hacer algo con los valores obtenidos, por ejemplo, asignarlos a variables o utilizarlos en tu lógica
if (!utmSource || !cfUvid || !monto || !generacion || !producto || generacion === 'null' || producto === 'null' || utmSource === 'null' || cfUvid === 'null' || monto==='null') {
    window.location.href = 'https://secure.seresderiqueza.com/pagina-vencida3zly3waa';
}

//Testing: 
//http://www.payment_app.com/?&tags=normal&mnt=fothandnnhns&utm_source=Adrian&cf_uvid=Adrian&algn=40&producto=01%20Riqueza%20Infinita
// //4213166137551234  -Credit test 

//Incubadora
//http://www.payment_app.com/?&tags=normal&mnt=sixtnnhunsev&utm_source=Adrian&cf_uvid=Adrian&algn=40&producto=Incubadora%20Libertad%20Financiera

//Prod:
//https://panel.fivetwofive.tech/paymentApp/?&tags=normal&mnt=fothandnnhns&utm_source=Adrian&cf_uvid=Adrian&algn=40&producto=01%20Riqueza%20Infinita