
let correoEl = document.getElementById("email");
let resolveMail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
let btnMail = document.getElementById("restablecerPass");



correoEl.addEventListener('keyup', function(){

    if(resolveMail.test(correoEl.value)){
        btnMail.disabled = false;
    }else{
        btnMail.disabled = true;
    }

});

correoEl.addEventListener('blur', function(){


    if(resolveMail.test(correoEl.value)){

        btnMail.disabled = false;
        console.log("correo correcto");
    }else{
        alertGeneral('alertEm', 'Ingrese un correo valido', 'danger')
        btnMail.disabled = true;
    }


});


let webhook = 'https://hook.us1.make.com/d8nkmp5kzxj9hw5ryommyly9prnx1pl2';

let modalTitle = document.getElementById("exampleModalLongTitle");
let modalCuerp = document.getElementById("textFot");


btnMail.addEventListener('click',function(){

    document.querySelector('.loader-container').style.display = 'block';
    let data = {
        email: correoEl.value,
        plataform: "thinkific"
    };

    fetch(webhook, {
       method: "POST",
        body: JSON.stringify(data),
        headers:{
            "Content-Type": "application/json"
        }
})
    .then(data => {
        document.querySelector('.loader-container').style.display = 'none';
        modalTitle.textContent="Contraseña reestablecida.";
        modalCuerp.textContent="¡Revisa tu bandeja de entrada o en spam!, te llegará un correo con los pasos a seguir.";
        $('#modalPass').modal('show');
      
        setTimeout(function(){
            window.location.href = 'https://edu.seresderiqueza.com/users/sign_in';
        },3000);
    })
    .catch(error => {
        modalTitle.textContent="Hubo un error al reestablecer la contraseña";
        modalCuerp.textContent="¡Favor de contactar con el equipo de soporte: 5586795301";
        document.querySelector('.loader-container').style.display = 'none';
        $('#modalPass').modal('show');
      
        setTimeout(function(){
            window.location.href = 'https://edu.seresderiqueza.com/users/sign_in';
        },10000);
    });

});

