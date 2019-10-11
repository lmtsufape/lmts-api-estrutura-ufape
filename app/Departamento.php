<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = ['nome', 'campusId'];

    public function campus(){
      return $this->belongsTo('lmtsApi\Campus', 'campusId');
    }
    public function curso(){
      return $this->hasMany('lmtsApi\Curso');
    }
}
