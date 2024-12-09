<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_DIRECCIONES extends Model
{
    protected $table = 'TBL_DIRECCIONES';
    public $timestamps = false;
    protected $primaryKey = 'codigo_direccion';
    protected $fillable = ['codigo_tipo_lugar' , 'codigo_lugar_padre', 'nombre_lugar' , 'longitud' , 'latitud'];

    public function padreDireccion()
    {
        return $this->belongsTo(TBL_DIRECCIONES::class, 'codigo_lugar_padre', 'codigo_direccion');
    }

    public function hijoDireccion()
    {
        return $this->hasMany(TBL_DIRECCIONES::class, 'codigo_lugar_padre', 'codigo_direccion');
    }

    public function TBL_TIPO_LUGARES()
    {
        return $this->belongsTo(TBL_TIPO_LUGARES::class, 'codigo_tipo_lugar');
    }

    public function TBL_DIRECCIONES_USUARIO()
    {
        return $this->hasMany(TBL_DIRECCIONES_USUARIO::class, 'codigo_direccion');
    }

}
