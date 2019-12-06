<?php

namespace lmtsApi\Http\Controllers;

use Illuminate\Http\Request;
use lmtsApi\User;
use lmtsApi\UnidadeOrg;

class UserController extends Controller
{
    public function getDados(Request $request, $email){
      $user = User::where('email',$email)
                    // ->select(array('id', 'email', 'cursoId', 'tipo'))
                    ->first();
      $response = [
                    'id' => $user->id,
                    'email' => $user->email,
                    'unidadeOrgId' => $user->unidadeOrg->id,
                    'tipoNome' => $user->tipoUsuario->nome,
                    'tipoUsuarioId' => $user->tipoUsuarioId,
                  ];
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

    public function getEmailsPorUnidade(Request $request, $idUnidade){
      $unidade = UnidadeOrg::find($idUnidade);
      if(empty($unidade)){
        return response()->json('Não encontrado',404);
      }
      $usuarios = $unidade->user;
      $response = [];
      foreach ($usuarios as $key) {
        array_push($response, $key->email);
      }
      return response()->json($response, 201);


    }


}
