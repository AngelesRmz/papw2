<?php

namespace PF_PAPW2;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'nombre', 'apellidos', 'username', 'correo', 'pass',
    ];

      /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     protected $hidden = [
         'remember_token',
    ];

    

    public function getAuthPassword()
    {
      return $this->pass;
    }
}
