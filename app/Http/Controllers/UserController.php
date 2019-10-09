<?php

namespace lmtsApi\Http\Controllers;

use Illuminate\Http\Request;
use lmtsApi\User;

class UserController extends Controller
{
    public function getDados(Request $request, $email){
      $user = User::where('email',$email)
                    ->select(array('id', 'email', 'cursoId', 'tipo'))
                    ->get();
      return response()->json($user, 201);
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
