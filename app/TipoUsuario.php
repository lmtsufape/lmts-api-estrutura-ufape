<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $fillable = ['nome', 'unidadeOrgId'];

    public function acao(){
      return $this->belongsToMany('lmtsApi\Acao', 'acao_do_user', 'acaoId','tipoUsuarioId')->withPivot('nivel');
    }

    // public function unidadeOrg(){
    //   return $this->belongsTo('lmtsApi\UnidadeOrg', 'unidadeOrgId');
    // }
    public function user(){
      return $this->hasOne('lmtsApi\User');
    }
}
