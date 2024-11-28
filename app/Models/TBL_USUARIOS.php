<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_USUARIOS extends Model
{
    protected $table = 'TBL_USUARIOS';
    public $timestamps = false;
    protected $primaryKey = 'codigo_usuario';
    protected $guarded = [];

    public function TBL_CONVERSACIONES_EMISOR()
    {
        return $this->hasMany(TBL_CONVERSACIONES::class, 'codigo_usuario_emisor' , 'codigo_usuario');
    }

    public function TBL_CONVERSACIONES_RECEPTOR()
    {
        return $this->hasMany(TBL_CONVERSACIONES::class, 'codigo_usuario_receptor' , 'codigo_usuario');
    }

    public function TBL_PRODUCTOS_FAVORITOS()
    {
        return $this->hasMany(TBL_PRODUCTOS_FAVORITOS::class, 'codigo_usuario');
    }

    public function TBL_MENSAJES()
    {
        return $this->hasMany(TBL_MENSAJES::class, 'codigo_usuario');
    }

    public function TBL_RESENAS()
    {
        return $this->hasMany(TBL_RESENAS::class, 'codigo_usuario');
    }

    public function TBL_PRODUCTOS_CARRITOS()
    {
        return $this->hasMany(TBL_PRODUCTOS_CARRITOS::class, 'codigo_usuario');
    }

    public function TBL_DIRECCIONES_USUARIO()
    {
        return $this->hasMany(TBL_DIRECCIONES_USUARIO::class, 'codigo_usuario');
    }

    public function TBL_PRODUCTOS()
    {
        return $this->hasMany(TBL_PRODUCTOS::class, 'codigo_usuario');
    }

    public function TBL_PUJAS()
    {
        return $this->hasMany(TBL_PUJAS::class, 'codigo_usuario');
    }

    public function TBL_SERVICIOS_X_USUARIOS()
    {
        return $this->hasMany(TBL_SERVICIOS_X_USUARIOS::class, 'codigo_usuario');
    }

    public function TBL_TARJETAS()
    {
        return $this->hasMany(TBL_TARJETAS::class, 'codigo_usuario');
    }

    public function TBL_FACTURAS()
    {
        return $this->hasMany(TBL_FACTURAS::class, 'codigo_usuario');
    }
}
