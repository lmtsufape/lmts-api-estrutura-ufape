<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class Acao extends Model
{
    protected $fillable = ['nome', 'moduloId'];

    public function tipoUsuario(){
      return $this->hasMany('lmtsApi\ControleDeAcesso');
    }

    public function modulo(){
      return $this->belongsTo('lmtsApi\Modulo', 'moduloId');
    }
}
