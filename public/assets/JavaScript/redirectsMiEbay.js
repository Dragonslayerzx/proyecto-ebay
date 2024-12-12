let mostrarFavoritosA = document.querySelector('#mostrarFavoritosA');
let mostrarProductosListadosA = document.querySelector('#mostrarProductosListadosA');
let mostrarProductosActivosA = document.querySelector('#mostrarProductosActivosA');
let mostrarComprasA = document.querySelector('#mostrarComprasA');
let mostrarProductosVendidosA = document.querySelector('#mostrarProductosVendidosA');
let datosUsuarioA = document.querySelector('#datosUsuarioA');

let codigoUsuarioLS = localStorage.getItem('codigo_usuario');

if(codigoUsuarioLS){
    if(mostrarFavoritosA)
    mostrarFavoritosA.href += `/${codigoUsuarioLS}`;
}
if(codigoUsuarioLS){
    if(mostrarProductosListadosA)
    mostrarProductosListadosA.href += `/${codigoUsuarioLS}`;
}
if(codigoUsuarioLS){
    if(mostrarProductosActivosA)
    mostrarProductosActivosA.href += `/${codigoUsuarioLS}`;
}
if(codigoUsuarioLS){
    if(mostrarComprasA)
        mostrarComprasA.href += `/${codigoUsuarioLS}`;
}
if(codigoUsuarioLS){
    if(mostrarProductosVendidosA)
        mostrarProductosVendidosA.href += `/${codigoUsuarioLS}`;
}
if(codigoUsuarioLS){
    if(datosUsuarioA)
        datosUsuarioA.href += `/${codigoUsuarioLS}`;
}