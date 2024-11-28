<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_FACTURAS extends Model
{
    protected $table = 'TBL_FACTURAS';
    public $timestamps = false;
    protected $primaryKey = 'codigo_factura';
    protected $fillable = ['codigo_usuario' , 'fecha' , 'monto'];

    public function TBL_USUARIOS()
    {
        return $this->belongsTo(TBL_USUARIOS::class, 'codigo_usuario');
    }

    public function TBL_DETALLE_FACTURAS()
    {
        return $this->hasMany(TBL_DETALLE_FACTURAS::class, 'codigo_factura');
    }
}
