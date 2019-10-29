<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class UnidadeOrg extends Model
{
    protected $fillable = ['nome', 'tipoUnidadeId'];

    public function tipoUsuario(){
      return $this->hasMany('lmtsApi\TipoUsuario');
    }

    public function tipoUnidade(){
      return $this->belongsTo('lmtsApi\TipoUnidade', 'tipoUnidadeId');
    }

    public function subordinacao(){
      return $this->hasMany('lmtsApi\Subordinacao', 'unidadeOrgId');
    }
}
