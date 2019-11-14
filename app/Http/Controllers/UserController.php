<?php

namespace lmtsApi\Http\Controllers;

use Illuminate\Http\Request;
use lmtsApi\User;

class UserController extends Controller
{
    public function getDados(Request $request, $email){
      $user = User::where('email',$email)->first();
      $response = [];
      array_push($response, [
                            'id'           => $user->id,
                            'email'        => $user->email,
                            'cursoId'      => $user->cursoId,
                            'tipo'         => $user->tipoUsuario->nome,
                            'tipoUsuario' => $user->tipoUsuario->id,
                          ]);
      return response()->json($response, 201);
    }

    public function getEmailsCoordenadorPorCurso(Request $request, $idCurso){
      $user = User::where('cursoId', $idCurso)
                    ->where('tipo', 'coordenador')
                    ->select('email')
                    ->get();
      return response()->json($user, 201);
    }

    public function getEmailsPreg(Request $request){
      $user = User::where('tipo', 'PREG')
                    ->select('email')
                    ->get();
      return response()->json($user, 201);
    }

}
