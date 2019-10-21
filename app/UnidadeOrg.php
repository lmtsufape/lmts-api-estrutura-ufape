<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class UnidadeOrg extends Model
{
    protected $fillable = ['nome', 'tipoUnidadeId'];

    public function tipoUsuario(){
      return $this->hasMany('lmtsApi\TipoUsuario');
    }

    public function tipo(){
      return $this->belongsTo('lmtsApi\Tipo', 'tipoUnidadeId');
    }
}
