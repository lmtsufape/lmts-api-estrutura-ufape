<?php

namespace lmtsApi\Http\Controllers;

use lmtsApi\UnidadeOrg;
use Illuminate\Http\Request;

class UnidadeOrgController extends Controller
{
  public function index(){                           //get: lmts.api/api/modulo
      $aux = UnidadeOrg::all();
      $response = [];
      foreach ($aux as $unidadeOrg) {
        $aux = $unidadeOrg->departamento->nome;
        $unidadeOrg->departamentoId = $aux;
        array_push($response, [
                                'id' => $unidadeOrg->id,
                                'nome' => $unidadeOrg->nome,
                                'departamento' => $unidadeOrg->departamento->nome,
                                'campus'  => $unidadeOrg->departamento->campus->nome,

                              ]);
      }
      return response()->json($response, 201);
  }

  public function store(Request $request){           //post: lmts.api/api/modulo
      $unidadeOrg = new UnidadeOrg();
      $unidadeOrg->fill($request->all());
      $unidadeOrg->save();
      return response()->json($unidadeOrg, 201);
  }

  public function update(Request $request, $id){     //put: lmts.api/api/modulo/{id}
      $unidadeOrg = UnidadeOrg::find($id);
      if(!$unidadeOrg) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }
      $unidadeOrg->fill($request->all());
      $unidadeOrg->save();
      return response()->json($unidadeOrg);
  }

  public function destroy($id){                      //delete: lmts.api/api/modulo/{id}
      $unidadeOrg = UnidadeOrg::find($id);

      if(!$unidadeOrg) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }

      $unidadeOrg->delete(200);
  }
}
