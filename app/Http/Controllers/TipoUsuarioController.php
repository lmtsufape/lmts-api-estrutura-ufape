<?php

namespace lmtsApi\Http\Controllers;

use lmtsApi\TipoUsuario;
use Illuminate\Http\Request;

class TipoUsuarioController extends Controller
{
  public function index(){                           //get: lmts.api/api/curso
      $aux = TipoUsuario::all();

      return response()->json($aux, 201);
  }

  public function store(Request $request){           //post: lmts.api/api/curso
      $tipoUsuario = new TipoUsuario();
      $tipoUsuario->fill($request->all());
      $tipoUsuario->save();
      return response()->json($tipoUsuario, 201);
  }

  public function update(Request $request, $id){     //put: lmts.api/api/curso/{id}
      $tipoUsuario = TipoUsuario::find($id);
      if(!$tipoUsuario) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }
      $tipoUsuario->fill($request->all());
      $tipoUsuario->save();
      return response()->json($tipoUsuario);
  }

  public function destroy($id){                      //delete: lmts.api/api/curso/{id}
      $tipoUsuario = TipoUsuario::find($id);

      if(!$tipoUsuario) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }

      $tipoUsuario->delete(200);
  }

}
