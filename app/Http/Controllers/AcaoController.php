<?php

namespace lmtsApi\Http\Controllers;

use lmtsApi\Acao;
use Illuminate\Http\Request;

class AcaoController extends Controller
{
  public function index(){                           //get: lmts.api/api/modulo
      $aux = UnidadeOrg::all();

      return response()->json($aux, 201);
  }

  public function store(Request $request){           //post: lmts.api/api/modulo
      $acao = new UnidadeOrg();
      $acao->fill($request->all());
      $acao->save();
      return response()->json($acao, 201);
  }

  public function update(Request $request, $id){     //put: lmts.api/api/modulo/{id}
      $acao = UnidadeOrg::find($id);
      if(!$acao) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }
      $acao->fill($request->all());
      $acao->save();
      return response()->json($acao);
  }

  public function destroy($id){                      //delete: lmts.api/api/modulo/{id}
      $acao = UnidadeOrg::find($id);

      if(!$acao) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }

      $acao->delete(200);
  }
}
