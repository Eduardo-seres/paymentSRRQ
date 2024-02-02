// alert("hola entre");


$(document).ready(function() {
    var $form = $("#card-form");

    Conekta.setPublicKey('key_EM2HefqTPetMnhD9r4F3Rzr');

    var conektaSuccessResponseHandler = function(token) {
        console.log("Token de Conekta:", token.id);
        $form.trigger("reset");
        // Enviar proximamente El token con todos los datos al controller
    };

    var conektaErrorResponseHandler = function(response) {
        $form.find(".card-errors").text(response.message_to_purchaser);
        $form.find("button").prop("disabled", false);
    };

    document.getElementById("card-form").addEventListener("submit", function(evt) {
        evt.preventDefault();
        var $form = $("#card-form");
        $form.find("button").prop("disabled", true);

         var cardNumber = $form.find("[data-conekta='card[number]']").val();
        cardNumber = cardNumber.replace(/-/g, ''); // Eliminar guiones
        Conekta.Token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
    });
});

// $(document).ready(function(){
//     //For Card Number formatted input
//     var cardNum = document.getElementById('cr_no');
//     cardNum.onkeyup = function (e) {
//         if (this.value == this.lastValue) return;
//         var caretPosition = this.selectionStart;
//         var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
//         var parts = [];
        
//         for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
//             parts.push(sanitizedValue.substring(i, i + 4));
//         }
        
//         for (var i = caretPosition - 1; i >= 0; i--) {
//             var c = this.value[i];
//             if (c < '0' || c > '9') {
//                 caretPosition--;
//             }
//         }
//         caretPosition += Math.floor(caretPosition / 4);
        
//         this.value = this.lastValue = parts.join('-');
//         this.selectionStart = this.selectionEnd = caretPosition;
//     }
    
//     })



// debugger;

    // var $form = $("#card-form");
    // var email = '';
    // var nombre = '';

    // Conekta.setPublicKey('key_EM2HefqTPetMnhD9r4F3Rzr');

    // var conektaSuccessResponseHandler = function(token) {
    //     debugger;
    //     console.log("Token de Conekta:", token.id);
    //     $form.trigger("reset");
    // };

    // var conektaErrorResponseHandler = function(response) {
    //     $form.find(".card-errors").text(response.message_to_purchaser);
    //     $form.find("button").prop("disabled", false);
    // };

    // document.getElementById("card-form").addEventListener("submit", function(evt) {
    //     evt.preventDefault();
    //     var $form = $("#card-form");
    //     $form.find("button").prop("disabled", true);
    //     Conekta.Token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
    // });

    // $(function() {
    //     $('#email').change(function() {
    //         email = $('#email').val();
    //     });
    //     $('#nombre').change(function() {
    //         nombre = $('#nombre').val();
    //     });
    // });