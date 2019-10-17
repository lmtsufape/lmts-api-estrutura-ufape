<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class Acao extends Model
{
    protected $fillable = ['nome', 'moduloId'];

    public function tipoUser(){
      return $this->belongsToMany('lmtsApi\User', 'acao_do_user', 'acaoId','tipoUserId')->withPivot('nivel');
    }

}
