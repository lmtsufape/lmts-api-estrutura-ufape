<?php

namespace lmtsApi;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
                            'objId',
                            'dataHora',
                            'objJson',
                            'userIp',
                            'userId',
                            'acaoId',
                          ];

    public function user(){
      return $this->belongsTo('lmtsApi\User', 'userId');
    }

    public function acao(){
      return $this->belongsTo('lmtsApi\Acao', 'acaoId');
    }
}
