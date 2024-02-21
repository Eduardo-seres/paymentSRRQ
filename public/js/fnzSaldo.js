$(document).ready(function(){
    console.log("ready");
});

// document.querySelector('.loader-container').style.display = 'block';
let fechaInicial = document.getElementById('fechaIni');
let fechaFinal = document.getElementById('fechaFin');


fechaInicial.addEventListener('change',function(){
    if( fechaInicial.value && fechaFinal.value && new Date(fechaInicial.value) > new Date(fechaFinal.value)){
            alertGeneral('alertMont', '¡La fecha inicial no puede ser menor a la fecha final!', 'danger');
            fechaInicial.value = "";
    }
});

fechaFinal.addEventListener('change',function(){
    if( fechaInicial.value && fechaFinal.value && new Date(fechaInicial.value) > new Date(fechaFinal.value)){
        alertGeneral('alertMont', '¡La fecha inicial no puede ser menor a la fecha final', 'danger');
        fechaFinal.value="";
    }
});


btnFin = document.getElementById('btnFinn');


btnFin.addEventListener('click', function(){

    if(fechaInicial.value && fechaFinal.value){
        document.querySelector('.loader-container').style.display = 'block';
         //uso de fetch
        const webhookUrl = 'https://hook.us1.make.com/x38awpt5bweou59qui85bfr5si9iigy1';

 
        let timestampIni = new Date(fechaInicial.value).getTime() / 1000; // dividido por 1000 para obtener segundos en lugar de milisegundos
        let timestampFin = new Date(fechaFinal.value).getTime() / 1000;
    
         // Ejemplo de cómo imprimir los timestamps en la consola
        const data = {
            fechaIni : timestampIni,
            fechaFin : timestampFin
        };

        const requestOptions = {
            method:'POST',
            headers:{
                'Content-type' : 'application/json'
            },
            body: JSON.stringify(data)
        }

        //enviar la webhook
        fetch(webhookUrl, requestOptions)
            .then(response =>{
                if(!response.ok){
                    throw new Error("Error al enviar información");
                }
                // return response.json();  //make no responde el json
            })
        .then(data =>{
            setTimeout(function(){
                document.querySelector('.loader-container').style.display = 'none';
                alertGeneral('alertMont', 'Se esta generando tu excel....', 'info');
            }, 2000);
        })
        .catch(error => {
            alertGeneral('alertMont', 'Hubo un error consulta a soporte....', 'danger');
          });
    }
   

    
});