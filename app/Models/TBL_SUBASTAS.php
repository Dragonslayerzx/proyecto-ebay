<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_SUBASTAS extends Model
{
    protected $table = 'TBL_SUBASTAS';
    public $timestamps = false;
    protected $primaryKey = 'codigo_subasta';
    protected $fillable = ['codigo_estado_subasta' , 'precio_inicio' , 'fecha_inicio' , 'fecha_fin'];

    public function TBL_ESTADO_SUBASTAS()
    {
        return $this->belongsTo(TBL_ESTADO_SUBASTAS::class, 'codigo_estado_subasta');
    }

    public function TBL_PUJAS()
    {
        return $this->hasMany(TBL_PUJAS::class, 'codigo_subasta');
    }

    //Dudoso
    public function TBL_PRODUCTOS()
    {
        return $this->belongsTo(TBL_PUJAS::class, 'codigo_subasta' , 'codigo_producto');
    }
}