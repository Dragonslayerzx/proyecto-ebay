<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_RESENAS extends Model
{
    protected $table = 'TBL_RESENAS';
    public $timestamps = false;
    protected $primaryKey = 'codigo_resenas';
    protected $fillable = ['codigo_producto' , 'codigo_usuario' , 'comentario' , 'valoracion'];

    public function TBL_USUARIOS()
    {
        return $this->belongsTo(TBL_USUARIOS::class, 'codigo_usuario');
    }

    public function TBL_PRODUCTOS()
    {
        return $this->belongsTo(TBL_PRODUCTOS::class, 'codigo_producto');
    }
}
