<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_CONVERSACIONES extends Model
{
    protected $table = 'TBL_CONVERSACIONES';
    public $timestamps = false;
    protected $primaryKey = 'codigo_conversaciones';
    protected $fillable = ['codigo_usuario_emisor' , 'codigo_usuario_receptor'];

    public function TBL_USUARIO_EMISOR()
    {
        return $this->belongsTo(TBL_USUARIOS::class, 'codigo_usuario_emisor');
    }

    public function TBL_USUARIO_RECEPTOR()
    {
        return $this->belongsTo(TBL_USUARIOS::class, 'codigo_usuario_receptor');
    }

    public function TBL_MENSAJES()
    {
        return $this->hasMany(TBL_MENSAJES::class, 'codigo_conversaciones');
    }

}
