<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_SERVICIOS_PAGOS extends Model
{
    protected $table = 'TBL_SERVICIOS_PAGOS';
    public $timestamps = false;
    protected $primaryKey = 'codigo_servicio';
    protected $fillable = ['nombre_servicio' , 'descripcion'];

    public function TBL_SERVICIOS_X_USUARIOS()
    {
        return $this->hasMany(TBL_SERVICIOS_X_USUARIOS::class, 'codigo_servicio');
    }
}
