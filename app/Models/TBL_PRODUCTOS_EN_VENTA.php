<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_PRODUCTOS_EN_VENTA extends Model
{
    protected $table = 'TBL_PRODUCTOS_EN_VENTA';
    public $timestamps = false;
    protected $primaryKey = 'codigo_producto_en_venta';
    protected $fillable = ['codigo_producto_en_venta','codigo_producto','cantidad'];

    public function TBL_PRODUCTOS()
    {
        return $this->belongsTo(TBL_PRODUCTOS::class, 'codigo_producto');
    }

}
