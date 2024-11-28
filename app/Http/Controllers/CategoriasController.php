<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TBL_CATEGORIAS;

class CategoriasController extends Controller
{
    public function consultarCategoriasConSusHijos(){

        $categorias = TBL_CATEGORIAS::with('padreCategoria', 'categoriasBajoPadre')->get();

        $categoriasData = [];

        foreach ($categorias as $categoria) {
            $categoriasData[] = [
                'codigo_categoria' => $categoria->codigo_categoria,
                'nombre' => $categoria->nombre,
                'padre_categoria' => $categoria->padreCategoria ? $categoria->padreCategoria->nombre : null, // Nombre del padre si existe
                'subcategorias' => $categoria->categoriasBajoPadre->pluck('nombre')->toArray() // Obtener los nombres de las subcategorías
            ];
        }

        dd($categoriasData); // Mostrar el arreglo con la información


    }
}
