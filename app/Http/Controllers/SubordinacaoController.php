<?php

namespace lmtsApi\Http\Controllers;

use lmtsApi\Subordinacao;
use Illuminate\Http\Request;

class SubordinacaoController extends Controller
{
  public function index(){                           //get: lmts.api/api/modulo
      $aux = Subordinacao::all();
      return response()->json($aux, 201);
  }

  public function store(Request $request){           //post: lmts.api/api/modulo
      $subordinacao = new Subordinacao();
      $subordinacao->fill($request->all());
      $subordinacao->save();
      return response()->json($subordinacao, 201);
  }

  public function update(Request $request, $id){     //put: lmts.api/api/modulo/{id}
      $subordinacao = Subordinacao::find($id);
      if(!$subordinacao) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }
      $subordinacao->fill($request->all());
      $subordinacao->save();
      return response()->json($subordinacao);
  }

  public function destroy($id){                      //delete: lmts.api/api/modulo/{id}
      $subordinacao = Subordinacao::find($id);

      if(!$subordinacao) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }

      $subordinacao->delete(200);
  }
}
