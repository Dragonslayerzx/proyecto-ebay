<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_PUJAS extends Model
{
    protected $table = 'TBL_PUJAS';
    public $timestamps = false;
    protected $primaryKey = 'codigo_pujas';
    protected $fillable = ['codigo_producto_suba' , 'codigo_usuario' , 'monto' , 'fecha']; //codigo_producto_subasta se refiere

    //Dudoso
    public function TBL_SUBASTAS()
    {
        return $this->belongsTo(TBL_SUBASTAS::class, 'codigo_producto_suba');
    }

    public function TBL_USUARIOS()
    {
        return $this->belongsTo(TBL_PRODUCTOS::class, 'codigo_usuario');
    }
}
