<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\LOM_Componente_Virtual;
use App\LOM_OA_Visitado;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name', 
        'email', 
        'password',
        'nombre',
        'lugar_nac',
        'fecha_nac',
        'apellido',
        'sexo',
        'id_componente_virtual',
        'id_oa_visitados',
        'correo',
        'pregunta_seguridad',
        'respuesta_seguridad',
        'clave',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /*
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /*
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function lom_componente_virtual()
    {
        return $this->hasOne('App\LOM_Componente_Virtual');
    }

    public function lom_oa_visitado()
    {
        return $this->hasOne('App\LOM_OA_Visitado');
    }

}
