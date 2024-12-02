<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_CATEGORIAS extends Model
{
    protected $table = 'TBL_CATEGORIAS';
    public $timestamps = false;
    protected $primaryKey = 'codigo_categoria';
    protected $fillable = ['codigo_categoria_padre', 'nombre'];

    public function padreCategoria()
    {
        return $this->belongsTo(TBL_CATEGORIAS::class, 'codigo_categoria_padre');
    }

    public function categoriasBajoPadre()
    {
        return $this->hasMany(TBL_CATEGORIAS::class, 'codigo_categoria_padre');
    }

    public function TBL_PRODUCTOS()
    {
        return $this->hasMany(TBL_PRODUCTOS::class, 'codigo_categoria');
    }

}
