document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita el envío normal del formulario

    const formData = new FormData(this);

    fetch(window.laravelRoutes.authRoute, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Guarda el nombre de usuario en el localStorage
            localStorage.setItem('nombre_usuario', data.user.nombre_usuario);
            localStorage.setItem('codigo_usuario', data.user.codigo_usuario);
            localStorage.setItem('nombre', data.user.nombre);
            localStorage.setItem('apellido', data.user.apellido);

            // Redirige o realiza cualquier otra acción que desees
            window.location.href = window.laravelRoutes.index; // Redirige a la vista principal
        } else {
            // Muestra el mensaje de error
            document.getElementById('error-message').style.display = 'block';
            document.getElementById('error-message').textContent = data.message;
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});