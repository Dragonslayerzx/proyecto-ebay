<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_ESTADO_SUBASTAS extends Model
{
    protected $table = 'TBL_ESTADO_SUBASTAS';
    public $timestamps = false;
    protected $primaryKey = 'codigo_estado_subasta';
    protected $fillable = ['descripcion'];

    public function TBL_SUBASTAS()
    {
        return $this->hasMany(TBL_SUBASTAS::class, 'codigo_estado_subasta');
    }

}
