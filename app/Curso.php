<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  protected $fillable = ['nome', 'unidade'];
}
