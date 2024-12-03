// Función para obtener las categorías usando fetch
let categoriasURL = window.laravelRoutes.obtenerCategorias;
function cargarCategorias() {
    fetch(categoriasURL)  // Hacemos la solicitud GET a la ruta que devuelve las categorías
        .then(response => response.json())  // Convertimos la respuesta en JSON
        .then(categorias => {
            //console.log(categorias);
            renderizarCategorias(categorias);
            renderizarSubcategoriasEnSelect(categorias)
        })
        .catch(error => console.error('Error al cargar las categorías:', error));
}

// Función para renderizar categorías y subcategorías
function renderizarCategorias(categorias) {
    const contenedorCategorias = document.getElementById('CategoriasContainer');
    let esPrimeraColumna = true;
    let columnaContenedor;

    // Iterar sobre las categorías principales (padres supremos) y asignarlas a las columnas
    categorias.forEach(categoria => {
        if (categoria.padre_categoria === null) {
            // Si es la primera columna o si hemos terminado una columna, asignamos la categoría a una nueva columna
            if (esPrimeraColumna) {
                // Crear un div para la columna 1
                columnaContenedor = document.createElement('div');
                columnaContenedor.classList.add('col-6');
                contenedorCategorias.appendChild(columnaContenedor);
            } else {
                // Crear un div para la columna 2
                columnaContenedor = document.createElement('div');
                columnaContenedor.classList.add('col-6');
                contenedorCategorias.appendChild(columnaContenedor);
            }
            esPrimeraColumna = !esPrimeraColumna; // Alternar entre columnas

            // Renderizar la categoría principal
            renderizarCategoria(categoria, columnaContenedor, true);
        }
    });

    // Procesar las subcategorías (hijos) de las categorías
    categorias.forEach(categoria => {
        if (categoria.padre_categoria !== null) {
            // Las subcategorías se insertan en la última columna abierta
            renderizarCategoria(categoria, columnaContenedor, false);
        }
    });
}

// Función para renderizar una sola categoría (y sus subcategorías)
function renderizarCategoria(categoria, contenedor, esPadre = false) {
    // Crear un div para cada categoría
    const div = document.createElement('div');
    div.classList.add('col-12', 'mb-2');  // Aseguramos que cada categoría ocupe el espacio completo de la fila
    
    // Crear el enlace principal para la categoría
    const link = document.createElement('a');
    link.classList.add('dropdown-item');
    link.style.pointerEvents = 'none';  // Desactivar eventos de clic para padres totales
    link.textContent = categoria.nombre;

    // Si es una categoría padre supremo, agregar la clase de negrita
    if (esPadre) {
        link.classList.add('fw-bold');
    } else {
        link.classList.add('fw-normal');
        link.style.pointerEvents = 'auto';  // Habilitar eventos de clic para subcategorías
        link.style.cursor = 'pointer';  // Cambiar el cursor a 'pointer' para las subcategorías

        // Agregar un manejador de clic para las subcategorías
        link.addEventListener('click', function() {
            alert('Hiciste clic en la subcategoría: ' + categoria.nombre);
            // O aquí podrías redirigir a una nueva página:
            // window.location.href = '/subcategoria/' + categoria.codigo_categoria;
        });
    }

    // Agregar el enlace de la categoría al div
    div.appendChild(link);

    // Agregar la categoría al contenedor
    contenedor.appendChild(div);

    // Si la categoría tiene subcategorías, las procesamos recursivamente
    if (categoria.subcategorias && categoria.subcategorias.length > 0) {
        categoria.subcategorias.forEach(subcategoria => {
            // Llamamos a la función recursivamente para las subcategorías
            renderizarCategoria(subcategoria, contenedor, false);
        });
    }
}

// Función para renderizar las subcategorías dentro del <select>
function renderizarSubcategoriasEnSelect(categorias) {
    const select = document.getElementById('CategoriasSelect');
    
    // Recorrer las categorías y añadir solo las subcategorías al select
    categorias.forEach(categoria => {
        // Llamar a la función recursiva para recorrer todas las subcategorías
        agregarSubcategorias(categoria, select);
    });
}

// Función recursiva para agregar subcategorías
function agregarSubcategorias(categoria, select) {
    // Si la categoría tiene subcategorías, agregarlas
    if (categoria.subcategorias && categoria.subcategorias.length > 0) {
        categoria.subcategorias.forEach(subcategoria => {
            // Crear una opción para cada subcategoría
            const option = document.createElement('option');
            option.value = subcategoria.codigo_categoria; // Usar un identificador único (por ejemplo, codigo_categoria)
            option.textContent = subcategoria.nombre;
            select.appendChild(option);

            // Recursivamente agregar subcategorías de la subcategoría (hijos de los hijos, etc.)
            agregarSubcategorias(subcategoria, select);
        });
    }
}




// Llamamos a la función para cargar las categorías cuando la página esté lista
document.addEventListener('DOMContentLoaded', cargarCategorias);

/*
Ej de html generado por las categorias:
<div class="col-6 mb-2">
    <a class="dropdown-item fw-bold" style="pointer-events: none;">Elemento 1</a>
    <a class="dropdown-item" href="#">Hijo Elemento 1</a>
</div>
*/


