
let correoEl = document.getElementById("email");
let resolveMail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
let btnMail = document.getElementById("restablecerPass");

//get params for change estructure of the page

const params = () => {
    let params = window.location.search;
    let urlState = new URLSearchParams(params);

    let ste = urlState.get('ste');
    // console.log(ste);


    //retorna el valor de la function
    return (ste);
};


const ste = params();


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
        // console.log("correo correcto");
    }else{
        alertGeneral('alertEm', 'Ingrese un correo valido', 'danger');
        btnMail.disabled = true;
    }

});


let webhook = (ste =='mtos' ? 'https://hook.us1.make.com/ye9szvrbbowfi3o59b3qvdvvjf2dcavn' : 'https://hook.us1.make.com/d8nkmp5kzxj9hw5ryommyly9prnx1pl2');
// let webhook = 'https://hook.us1.make.com/d8nkmp5kzxj9hw5ryommyly9prnx1pl2';

let modalTitle = document.getElementById("exampleModalLongTitle");
let modalCuerp = document.getElementById("textFot");
let titleText = document.getElementById("titleText");
let divPadre = document.getElementById('divGroup');
let emailFirst = document.getElementById('email');
let correoE2;

if(ste == 'mtos'){
    titleText.textContent = 'Restablecer correo de Usuario';
    btnMail.textContent='Restablecer correo'

    //New content group 
    const newDiv = document.createElement('div');
    newDiv.className = 'input-group';
    newDiv.id ='divGroup2';
    //new span ico
    const spanElement = document.createElement('span');
        spanElement.className = 'input-group-text';
        spanElement.style.marginTop= '4%';
        const iconElement = document.createElement('i');
        iconElement.className = 'fa fa-envelope color-blue';
        spanElement.appendChild(iconElement);
        
    //nw input
    let newInput = document.createElement('input');
    newInput.id = 'email2';
    newInput.name='email';
    newInput.setAttribute('type', 'email');
    newInput.setAttribute('placeholder', 'correo a corregir');
    newInput.setAttribute('class', 'form-control'); // Establecer la clase del nuevo input
    newInput.style.boxShadow = '0 0 0 0.15rem rgba(0,123,255,.25)';
    newInput.style.marginTop  = '4%';

    //abrir el span e input y ponerlo en el div
    newDiv.appendChild(spanElement);
    newDiv.appendChild(newInput);

    divPadre.appendChild(newDiv);

    correoE2 = document.getElementById('email2');
}

if(ste=='mtos'){
    btnMail.addEventListener('click',function(){
    if(correoE2.value){
        document.querySelector('.loader-container').style.display = 'block';       
        let data = {
            emailViejo: correoEl.value,
            emailNuevo: correoE2.value,
            estado: "restablecer"
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
            modalTitle.textContent="Correo restablecido.";
            modalCuerp.textContent="Espere acerca de 2 minutos y revisa todos tus datos donde el correo debio haberse corregido.";
            $('#modalPass').modal('show');
        
            setTimeout(function(){
                window.location.href =  window.location.href;
            },3000);
        })
        .catch(error => {
            modalTitle.textContent="Hubo un error al restablecer los correos";
            modalCuerp.textContent="¡Favor de contactar con el equipo de soporte: 5586795301";
            document.querySelector('.loader-container').style.display = 'none';
            $('#modalPass').modal('show');
        
            setTimeout(function(){
                window.location.href =  window.location.href;
            },10000);
        });
    } else{
        alertGeneral('alertEm', 'Coloca tu correo a corregir', 'danger');
    } 
    });
} else{
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
}
