<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $fillable ['nome'];

    public function acao(){
      return $this->hasMany('lmtsApi\Acao');
    }

    public function subordinacao(){
      return $this->hasMany('lmtsApi\Subordinacao');
    }
}
