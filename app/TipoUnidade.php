<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class TipoUnidade extends Model
{
    protected $fillable = ['nome'];

    public function unidadeOrg(){
      return $this->hasMany('lmtsApi\UnidadeOrg');
    }

    public function subordinacao(){
      return $this->hasMany('lmtsApi\Subordinacao');
    }
}
