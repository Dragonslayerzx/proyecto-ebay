<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_PRODUCTOS_CARRITOS extends Model
{
    protected $table = 'TBL_PRODUCTOS_CARRITOS';
    public $timestamps = false;
    //public $incrementing = true;
    //protected $keyType = 'int';
    protected $primaryKey = 'codigo_producto_carrito';
    protected $fillable = ['codigo_usuario' , 'cantidad_producto', 'codigo_subasta', 'codigo_producto_en_venta'];

    public function TBL_USUARIOS()
    {
        return $this->belongsTo(TBL_USUARIOS::class, 'codigo_usuario');
    }

    public function TBL_SUBASTAS()
    {
        return $this->belongsTo(TBL_SUBASTAS::class, 'codigo_subasta');
    }

    public function TBL_PRODUCTOS_EN_VENTA()
    {
        return $this->belongsTo(TBL_PRODUCTOS_EN_VENTA::class, 'codigo_producto_en_venta');
    }
}
