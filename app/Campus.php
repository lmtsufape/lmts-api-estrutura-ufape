<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $fillable = ['nome'];

    public function departamento(){
      return $this->hasMany('lmtsApi\Departamento');
    }
}
