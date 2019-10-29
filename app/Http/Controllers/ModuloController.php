<?php

namespace lmtsApi\Http\Controllers;

use lmtsApi\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{

  public function index(){                           //get: lmts.api/api/modulo
      $aux = Modulo::all();

      return response()->json($aux, 201);
  }

  public function store(Request $request){           //post: lmts.api/api/modulo
      $modulo = new Modulo();
      $modulo->fill($request->all());
      $modulo->save();
      return response()->json($modulo, 201);
  }

  public function update(Request $request, $id){     //put: lmts.api/api/modulo/{id}
      $modulo = Modulo::find($id);
      if(!$modulo) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }
      $modulo->fill($request->all());
      $modulo->save();
      return response()->json($modulo);
  }

  public function destroy($id){                      //delete: lmts.api/api/modulo/{id}
      $modulo = Modulo::find($id);

      if(!$modulo) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }

      $modulo->delete(200);
  }

}
