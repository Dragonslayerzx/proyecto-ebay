<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_TIPO_LUGARES extends Model
{
    protected $table = 'TBL_TIPO_LUGARES';
    public $timestamps = false;
    protected $primaryKey = 'codigo_tipo_lugar';
    protected $fillable = ['tipo_lugar'];

    public function TBL_DIRECCIONES()
    {
        return $this->belongsTo(TBL_DIRECCIONES::class, 'codigo_tipo_lugar');
    }
}
