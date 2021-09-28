// Year 
let fecha = new Date();
let year = fecha.getFullYear();
document.getElementById('footerId').innerHTML= `&copy; Todos los derechos reservados ${year} - <a href="index.php" class="hcatarsis">Catarsis 97</a>`;

// Verificación de campos vacios         
let campoNombre = document.getElementById('nombre');
let campoCorreo = document.getElementById('correo');
let campoAsunto = document.getElementById('asunto');
let campoMensaje = document.getElementById('mensaje');

let helpNombre = document.getElementById('helpNombre');
let helpCorreo = document.getElementById('helpCorreo');
let helpAsunto = document.getElementById('helpAsunto');
let helpMensaje = document.getElementById('helpMensaje');
let btn2 = document.getElementById('btn2');

function verificarDatos(){
    //console.log(campoNombre.value);
    if(campoNombre.value=='' || campoCorreo.value=='' || campoAsunto.value=='' || campoMensaje.value==''){
        document.getElementById('vacio').innerHTML="Hay campos vacios. Todos deberían estar completos.";
    }else{
        document.getElementById('vacio').innerHTML="";
    }
}

btn2.addEventListener('mouseover',verificarDatos,true); 

// Campo vacios (cada uno)

function cVacioN(){
    if(campoNombre.value==''){
        document.getElementById('helpNombre').innerHTML="El campo está vacío.";
    }else{
        document.getElementById('helpNombre').innerHTML="      ";
    } 
}
campoNombre.addEventListener('blur',cVacioN,true);

function cVacioC(){
    if(campoCorreo.value==''){
        document.getElementById('helpCorreo').innerHTML="El campo está vacío.";
    }else{
        document.getElementById('helpCorreo').innerHTML="      ";
    } 
}
campoCorreo.addEventListener('blur',cVacioC,true);

function cVacioA(){
    if(campoAsunto.value==''){
        document.getElementById('helpAsunto').innerHTML="El campo está vacío.";
    }else{
        document.getElementById('helpAsunto').innerHTML="      ";
    } 
}
campoAsunto.addEventListener('blur',cVacioA,true);

function cVacioM(){
    if(campoMensaje.value==''){
        document.getElementById('helpMensaje').innerHTML="El campo está vacío.";
    }else{
        document.getElementById('helpMensaje').innerHTML="      ";
    } 
}
campoMensaje.addEventListener('blur',cVacioM,true);
