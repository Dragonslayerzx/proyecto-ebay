<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_PRODUCTOS_CARRITOS extends Model
{
    protected $table = 'TBL_PRODUCTOS_CARRITOS';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = ['codigo_producto' , 'codigo_usuario'];
    protected $fillable = ['codigo_producto' , 'codigo_usuario' , 'cantidad_producto'];

    public function TBL_USUARIOS()
    {
        return $this->belongsTo(TBL_USUARIOS::class, 'codigo_usuario');
    }

    public function TBL_PRODUCTOS()
    {
        return $this->belongsTo(TBL_PRODUCTOS::class, 'codigo_producto');
    }
}
