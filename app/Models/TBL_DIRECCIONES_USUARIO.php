<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_DIRECCIONES_USUARIO extends Model
{
    protected $table = 'TBL_DIRECCIONES_USUARIO';
    public $timestamps = false;
    protected $primaryKey = ['codigo_usuario' , 'codigo_direccion'];
    protected $fillable = ['codigo_usuario' , 'codigo_direccion' , 'descripcion'];

    public function TBL_DIRECCIONES()
    {
        return $this->belongsTo(TBL_DIRECCIONES::class, 'codigo_direccion');
    }

    public function TBL_USUARIOS()
    {
        return $this->belongsTo(TBL_USUARIOS::class, 'codigo_usuario');
    }

}
