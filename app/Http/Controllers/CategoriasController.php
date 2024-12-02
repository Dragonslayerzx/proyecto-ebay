<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TBL_CATEGORIAS;

class CategoriasController extends Controller
{
    public function consultarCategoriasConSusHijos(){

        $categoriasData = TBL_CATEGORIAS::with('padreCategoria', 'categoriasBajoPadre')->get();

        $categorias = [];

        foreach ($categoriasData as $categoriaData) {
            $categorias[] = [
                'codigo_categoria' => $categoriaData->codigo_categoria,
                'nombre' => $categoriaData->nombre,
                'padre_categoria' => $categoriaData->codigo_categoria_padre, // Nombre del padre si existe
                'subcategorias' => $categoriaData->categoriasBajoPadre->pluck('nombre')->toArray() // Obtener los nombres de las subcategorías
            ];
        }

        $categoriasEstructuradas = $this->organizarCategorias($categorias);

        //dd($categoriasEstructuradas);
        return view('pruebaCategoriasRecursividad', compact('categoriasEstructuradas'));
    
        //dd($categorias);

    }

    private function organizarCategorias($categorias, $padreCategoria = null)
    {
        $categoriasOrganizadas = [];

        foreach ($categorias as $categoria) {
            // Verificar que la categoría tenga el padre correspondiente
            if ($categoria['padre_categoria'] == $padreCategoria) {
                // Recursión para obtener subcategorías
                $categoria['subcategorias'] = $this->organizarCategorias($categorias, $categoria['codigo_categoria']);
                
                // Si no tiene subcategorías, asignar un arreglo vacío
                if (empty($categoria['subcategorias']) && !empty($categoria['subcategorias'])) {
                    $categoria['subcategorias'] = [];
                }

                $categoriasOrganizadas[] = $categoria;
            }
        }

        return $categoriasOrganizadas;
    }

    public function mostrarTodas(){

        $categoriasData = TBL_CATEGORIAS::with('padreCategoria', 'categoriasBajoPadre')->get();

        $categorias = [];

        foreach ($categoriasData as $categoriaData) {
            $categorias[] = [
                'codigo_categoria' => $categoriaData->codigo_categoria,
                'nombre' => $categoriaData->nombre,
                'padre_categoria' => $categoriaData->codigo_categoria_padre, // Nombre del padre si existe
                'subcategorias' => $categoriaData->categoriasBajoPadre->pluck('nombre')->toArray() // Obtener los nombres de las subcategorías
            ];
        }

        $categoriasEstructuradas = $this->organizarCategorias($categorias);

        //dd($categoriasEstructuradas);
        return $categoriasEstructuradas;
    
        //dd($categorias);

    }

    public function obtenerProductos($codigoCategoria){
        $categoria = TBL_CATEGORIAS::find($codigoCategoria);

        $productosEnCategoria = $categoria->TBL_PRODUCTOS;
        //dd($productosEnCategoria);
        return view('productosCategoria',compact('productosEnCategoria'));
    }

}
