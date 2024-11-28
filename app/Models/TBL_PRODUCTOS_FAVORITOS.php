<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_PRODUCTOS_FAVORITOS extends Model
{
    protected $table = 'TBL_PRODUCTOS_FAVORITOS';
    public $timestamps = false;
    protected $primaryKey = ['codigo_usuario' , 'codigo_producto'];
    protected $fillable = ['codigo_usuario' , 'codigo_producto'];

    public function TBL_PRODUCTOS()
    {
        return $this->belongsTo(TBL_PRODUCTOS::class, 'codigo_producto');
    }

    public function TBL_USUARIOS()
    {
        return $this->belongsTo(TBL_PRODUCTOS::class, 'codigo_usuario');
    }
}
