<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_TARJETAS extends Model
{
    protected $table = 'TBL_TARJETAS';
    public $timestamps = false;
    protected $primaryKey = 'codigo_tarjeta';
    protected $fillable = ['codigo_usuario' , 'numero_tarjeta' , 'fecha_vencimiento' , 'cvv' , 'titular'];

    public function TBL_USUARIOS()
    {
        return $this->belongsTo(TBL_USUARIOS::class, 'codigo_usuario');
    }
}
