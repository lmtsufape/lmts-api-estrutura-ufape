<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class Acao extends Model
{
    protected $fillable = ['nome', 'moduloId'];

    public function tipoUsuario(){
      return $this->belongsToMany('lmtsApi\TipoUsuario', 'acao_do_user', 'acaoId','tipoUsuarioId')->withPivot('nivel');
    }

    public function modulo(){
      return $this->belongsTo('lmtsApi\Modulo', 'moduloId');
    }
}
