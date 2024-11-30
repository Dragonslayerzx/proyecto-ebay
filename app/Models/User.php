<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'TBL_USUARIOS';
    protected $primaryKey = 'CODIGO_USUARIO';
    public $incrementing = false;

    protected $fillable = [
        'NOMBRE_USUARIO',
        'CORREO',
        'CONTRASENA',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'CONTRASENA',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'CONTRASENA' => 'hashed',
        ];
    }

    public function getAuthPassword()
    {
    return $this->contrasena; // Le indicamos el nombre del campo password en nuestra db
    }
}
