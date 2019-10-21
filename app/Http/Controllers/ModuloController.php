<?php

namespace lmtsApi\Http\Controllers;

use lmtsApi\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{

  public function index(){                           //get: lmts.api/api/modulo
      $aux = TipoUsuario::all();
      $response = [];
      foreach ($aux as $modulo) {
        $aux = $modulo->departamento->nome;
        $modulo->departamentoId = $aux;
        array_push($response, [
                                'id' => $modulo->id,
                                'nome' => $modulo->nome,
                                'departamento' => $modulo->departamento->nome,
                                'campus'  => $modulo->departamento->campus->nome,

                              ]);
      }
      return response()->json($response, 201);
  }

  public function store(Request $request){           //post: lmts.api/api/curso
      $modulo = new TipoUsuario();
      $modulo->fill($request->all());
      $modulo->save();
      return response()->json($modulo, 201);
  }

  public function update(Request $request, $id){     //put: lmts.api/api/curso/{id}
      $modulo = TipoUsuario::find($id);
      if(!$modulo) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }
      $modulo->fill($request->all());
      $modulo->save();
      return response()->json($modulo);
  }

  public function destroy($id){                      //delete: lmts.api/api/curso/{id}
      $modulo = TipoUsuario::find($id);

      if(!$modulo) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }

      $modulo->delete(200);
  }

}
