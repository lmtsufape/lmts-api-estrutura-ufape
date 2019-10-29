<?php

namespace lmtsApi\Http\Controllers;

use lmtsApi\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
  public function index(){                           //get: lmts.api/api/modulo
      $aux = Log::all();

      return response()->json($aux, 201);
  }

  public function store(Request $request){           //post: lmts.api/api/modulo
      $log = new Log();
      $log->fill($request->all());
      $log->save();
      return response()->json($log, 201);
  }

  public function update(Request $request, $id){     //put: lmts.api/api/modulo/{id}
      $log = Log::find($id);
      if(!$log) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }
      $log->fill($request->all());
      $log->save();
      return response()->json($log);
  }

  public function destroy($id){                      //delete: lmts.api/api/modulo/{id}
      $log = Log::find($id);

      if(!$log) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }

      $log->delete(200);
  }

  public function createLog($userData, $acaoData, $objData){
    $log = new Log();
    $log->objId = $objData['objId'];
    $log->dataHora = $acaoData['dataHora'];
    $log->objJson = $objData['objJson'];
    $log->userIp = $userData['userIp'];
    $log->userId = $objData['userId'];
    $log->acaoId = $objData['acaoId'];
    $log->save();

  }

}
