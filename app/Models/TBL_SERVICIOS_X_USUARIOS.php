<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_SERVICIOS_X_USUARIOS extends Model
{
    protected $table = 'TBL_SERVICIOS_X_USUARIOS';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = ['codigo_usuario' , 'codigo_servicio'];
    protected $fillable = ['codigo_usuario' , 'codigo_servicio'];

    public function TBL_USUARIOS()
    {
        return $this->belongsTo(TBL_USUARIOS::class, 'codigo_usuario');
    }

    public function TBL_SERVICIOS_PAGOS()
    {
        return $this->belongsTo(TBL_SERVICIOS_PAGOS::class, 'codigo_servicio');
    }
}
