<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_MENSAJES extends Model
{
    protected $table = 'TBL_MENSAJES';
    public $timestamps = false;
    protected $primaryKey = 'codigo_mensaje';
    protected $fillable = ['codigo_usuario' , 'codigo_conversaciones' , 'contenido'];

    public function TBL_USUARIOS()
    {
        return $this->belongsTo(TBL_USUARIOS::class, 'codigo_usuario');
    }

    public function TBL_CONVERSACIONES()
    {
        return $this->belongsTo(TBL_CONVERSACIONES::class, 'codigo_conversaciones');
    }
}
