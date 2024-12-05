/*
<div id="nombreRealDiv" class="my-2 fw-bold">Usuario</div>
<a id="nombreUsuarioA" href="#" class="p-0 text-body-tertiary">Nombre Usuario</a>
*/

let nombreRealDiv = document.getElementById('nombreRealDiv');
let nombreUsuarioA = document.getElementById('nombreUsuarioA');
let saludoUsuarioButton = document.getElementById('saludoUsuarioButton');

if(localStorage.getItem('nombre_usuario')){
    nombreRealDiv.innerText = `${localStorage.getItem('nombre')} ${localStorage.getItem('apellido')}`;
    nombreUsuarioA.innerText = localStorage.getItem('nombre_usuario');
    saludoUsuarioButton.innerText = `¡Hola, ${localStorage.getItem('nombre')}!`;
}