<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class Subordinacao extends Model
{
    protected $fillable = ['unidadeOrgId', 'moduloId', 'unidadeOrgIdSubordinada'];

    public function unidadeOrg(){
      return $this->belongsTo('lmtsApi\UnidadeOrg', 'unidadeOrgId');
    }

    public function unidadeOrgSubordinada(){
      return $this->belongsTo('lmtsApi\UnidadeOrg', 'unidadeOrgIdSubordinada');
    }

    public function moduloId(){
      return $this->belongsTo('lmtsApi\Modulo', 'moduloId');
    }
}
