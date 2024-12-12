let agregarResenaForm = document.getElementById('agregarResenaForm');

if(localStorage.getItem('codigo_usuario')){
    agregarResenaForm.action += `/${localStorage.getItem('codigo_usuario')}`;
}