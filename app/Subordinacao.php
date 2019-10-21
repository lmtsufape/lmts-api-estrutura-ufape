<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class Subordinacao extends Model
{
    protected $fillable = ['unidadeOrgId', 'moduloId'];

    public function unidadeOrg(){
      return $this->belongsTo('lmtsApi\UnidadeOrg', 'unidadeOrgId');
    }

    public function moduloId(){
      return $this->belongsTo('lmtsApi\Modulo', 'moduloId');
    }
}
