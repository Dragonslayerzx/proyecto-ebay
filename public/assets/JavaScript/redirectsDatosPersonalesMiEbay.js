if(localStorage.getItem('codigo_usuario')){
    let usuarioComprasA = document.getElementById('usuarioComprasA');
    if(usuarioComprasA){
        usuarioComprasA.href += `/${localStorage.getItem('codigo_usuario')}`;
    }
    let usuarioPagosA = document.getElementById('usuarioPagosA');
    if(usuarioPagosA){
        usuarioPagosA.href += `/${localStorage.getItem('codigo_usuario')}`;
    }
    let datosUsuarioA = document.getElementById('datosUsuarioA');
    if(datosUsuarioA){
        datosUsuarioA.href += `/${localStorage.getItem('codigo_usuario')}`;
    }
}