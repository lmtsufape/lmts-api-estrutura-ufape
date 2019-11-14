<?php

namespace lmtsApi\Http\Controllers;

use lmtsApi\ControleDeAcesso;
use lmtsApi\Acao;
use Illuminate\Http\Request;

class ControleDeAcessoController extends Controller
{
    /**
     * ACL de um modulo ligado a um tipo de usuario
     *
     * @return \Illuminate\Http\Response
     */
     public function getAcl($modulo, $tipoUsusario){
       $acoes = Acao::where('moduloId', $modulo)->get();
       $ids = [];
       foreach($acoes as $key){
         array_push($ids, $key->id);
       }
       $acl = ControleDeAcesso::whereIn('acaoId', $ids)->where('tipoUsuarioId', $tipoUsusario)->get();
       $response = [];
       foreach($acl as $key){
         array_push($response, $key->acao->nome);
       }
       return response()->json($response,200);
     }
}
