<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nome', 'departamentoId'];

    public function departamento(){
      return $this->belongsTo('lmtsApi\Departamento', 'departamentoId');
    }
    public function user(){
      return $this->hasMany('lmtsApi\User');
    }
}
