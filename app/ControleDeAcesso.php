<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class ControleDeAcesso extends Model
{
    protected $fillable = ['acaoId','tipoUsuarioId', 'nivel'];

    public function acao(){
      return $this->belongsTo('lmtsApi\Acao', 'acaoId');
    }

    public function tipoUsuario(){
      return $this->belongsTo('lmtsApi\TipoUsuario', 'tipoUsuarioId');
    }
}
