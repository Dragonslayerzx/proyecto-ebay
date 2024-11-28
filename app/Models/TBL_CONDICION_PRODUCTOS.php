<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_CONDICION_PRODUCTOS extends Model
{
    protected $table = 'TBL_CONDICION_PRODUCTOS';
    public $timestamps = false;
    protected $primaryKey = 'codigo_condicion_producto';
    protected $fillable = ['descripcion'];

    public function TBL_PRODUCTOS()
    {
        return $this->hasMany(TBL_PRODUCTOS::class, 'codigo_condicion_producto');
    }

}
