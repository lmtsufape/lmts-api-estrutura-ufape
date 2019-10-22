<?php

namespace lmtsApi\Http\Controllers;

use lmtsApi\TipoUnidade;
use Illuminate\Http\Request;

class TipoUnidadeController extends Controller
{
  public function index(){                           //get: lmts.api/api/modulo
      $aux = TipoUnidade::all();
      $response = [];
      foreach ($aux as $tipoUsuario) {
        $aux = $tipoUsuario->departamento->nome;
        $tipoUsuario->departamentoId = $aux;
        array_push($response, [
                                'id' => $tipoUsuario->id,
                                'nome' => $tipoUsuario->nome,
                                'departamento' => $tipoUsuario->departamento->nome,
                                'campus'  => $tipoUsuario->departamento->campus->nome,

                              ]);
      }
      return response()->json($response, 201);
  }

  public function store(Request $request){           //post: lmts.api/api/modulo
      $tipoUsuario = new TipoUnidade();
      $tipoUsuario->fill($request->all());
      $tipoUsuario->save();
      return response()->json($tipoUsuario, 201);
  }

  public function update(Request $request, $id){     //put: lmts.api/api/modulo/{id}
      $tipoUsuario = TipoUnidade::find($id);
      if(!$tipoUsuario) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }
      $tipoUsuario->fill($request->all());
      $tipoUsuario->save();
      return response()->json($tipoUsuario);
  }

  public function destroy($id){                      //delete: lmts.api/api/modulo/{id}
      $tipoUsuario = TipoUnidade::find($id);

      if(!$tipoUsuario) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }

      $tipoUsuario->delete(200);
  }

}
