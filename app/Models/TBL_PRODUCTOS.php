<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_PRODUCTOS extends Model
{
    protected $table = 'TBL_PRODUCTOS';
    public $timestamps = false;
    protected $primaryKey = 'codigo_producto';
    protected $fillable = ['codigo_categoria' ,
                            'codigo_usuario' ,
                            'codigo_condicion_producto',
                            'nombre_producto',
                            'descripcion',
                            'marca',
                            'modelo',
                            'cantidad_disponible',
                            'precio',
                            'foto'];

    public function TBL_CATEGORIAS()
    {
        return $this->belongsTo(TBL_CATEGORIAS::class, 'codigo_categoria');
    }

    public function TBL_PRODUCTOS_CARRITOS()
    {
        return $this->hasMany(TBL_PRODUCTOS_CARRITOS::class, 'codigo_producto');
    }

    public function TBL_RESENAS()
    {
        return $this->hasMany(TBL_RESENAS::class, 'codigo_producto');
    }

    public function TBL_DETALLE_FACTURAS()
    {
        return $this->hasMany(TBL_DETALLE_FACTURAS::class, 'codigo_producto');
    }

    //Dudosa
    public function TBL_PRODUCTOS_EN_VENTA()
    {
        return $this->hasOne(TBL_PRODUCTOS_EN_VENTA::class, 'codigo_producto_en_venta' , 'codigo_producto');
    }

    public function TBL_CONDICION_PRODUCTOS()
    {
        return $this->belongsTo(TBL_CONDICION_PRODUCTOS::class, 'codigo_condicion_producto');
    }

    //Dudosa
    public function TBL_SUBASTAS()
    {
        return $this->hasOne(TBL_SUBASTAS::class, 'codigo_subasta' , 'codigo_producto');
    }

    public function TBL_PRODUCTOS_FAVORITOS()
    {
        return $this->hasMany(TBL_PRODUCTOS_FAVORITOS::class, 'codigo_producto');
    }

    public function TBL_USUARIOS()
    {
        return $this->belongsTo(TBL_USUARIOS::class, 'codigo_usuario');
    }
}
