/*
<div id="nombreRealDiv" class="my-2 fw-bold">Usuario</div>
<a id="nombreUsuarioA" href="#" class="p-0 text-body-tertiary">Nombre Usuario</a>
*/

let nombreRealDiv = document.getElementById('nombreRealDiv');
let nombreUsuarioDiv = document.getElementById('nombreUsuarioDiv');
let saludoUsuarioButton = document.getElementById('saludoUsuarioButton');

if(localStorage.getItem('nombre_usuario')){
    nombreRealDiv.innerText = `${localStorage.getItem('nombre')} ${localStorage.getItem('apellido')}`;
    nombreUsuarioDiv.innerText = localStorage.getItem('nombre_usuario');
    saludoUsuarioButton.innerText = `¡Hola, ${localStorage.getItem('nombre')}!`;

    let codigoUsuario = localStorage.getItem('codigo_usuario');

    let miEbayDatosPersonalesBoton = document.getElementById('miEbayDatosPersonalesBoton');
    miEbayDatosPersonalesBoton.href += `/${codigoUsuario}`;

    let cerrarSesionBoton = document.getElementById('cerrarSesionBoton');
    cerrarSesionBoton.addEventListener('click',function borrarLS() {
        localStorage.clear();
    })

    let listarProductoA = document.getElementById('listarProductoA');
    listarProductoA.href += `/${codigoUsuario}`;

    let miEbayComprasA = document.getElementById('miEbayComprasA');
    miEbayComprasA.href += `/${codigoUsuario}`;

    document.getElementById('carritoUsuarioA').href += `/${codigoUsuario}`;

    document.getElementById('listaFavoritosA').href += `/${codigoUsuario}`;

}else{
    let infoUsuarioContenedor = document.getElementById('infoUsuarioContenedor')
    
    infoUsuarioContenedor.innerHTML = "";
    let a = document.createElement('a');
    a.classList.add('me-3','btn','fw-bold');
    a.innerText = `Inicia sesion o registrate!`;
    a.href = `${ window.laravelRoutes.registro }`;

    infoUsuarioContenedor.appendChild(a);

}