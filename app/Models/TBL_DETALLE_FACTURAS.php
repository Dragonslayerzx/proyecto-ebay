<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_DETALLE_FACTURAS extends Model
{
    protected $table = 'TBL_DETALLE_FACTURAS';
    public $timestamps = false;
    protected $primaryKey = 'codigo_detalle_factura';
    protected $fillable = ['codigo_factura' , 'codigo_producto', 'precio' , 'cantidad', 'tipo_compra']; //0 subasta y 1 venta directa

    public function TBL_FACTURAS()
    {
        return $this->belongsTo(TBL_FACTURAS::class, 'codigo_factura');
    }

    public function TBL_PRODUCTOS()
    {
        return $this->belongsTo(TBL_PRODUCTOS::class, 'codigo_producto');
    }
}
