<?php

namespace lmtsApi;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tipo', 'cursoId', 'tipoUsuario'
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

    public function curso()
    {
        return $this->belongsTo('lmtsApi\Curso', 'cursoId');
    }

    public function log(){
      return $this->hasMany('lmtsApi\Log');
    }

    public function tipoUsuario(){
      return $this->belongsTo('lmtsApi\TipoUsuario', 'tipoUsuarioId');
    }
}
