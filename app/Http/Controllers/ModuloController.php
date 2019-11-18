<?php

namespace lmtsApi\Http\Controllers;

use lmtsApi\Modulo;
use lmtsApi\UnidadeOrg;
use lmtsApi\Subordinacao;
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

  private function recursaoGetUnidadesRaizTipoUnidade($modulo, $raiz, $tipoUnidade){
      $unidade = UnidadeOrg::find($raiz);
      if($unidade->tipoUnidade->id == $tipoUnidade){
        return $unidade->id . ',';
      }
      else{
        $subordinadas = Subordinacao::where('unidadeOrgId', $raiz)->where('moduloId', $modulo)->get();
        $ids = [];
        foreach ($subordinadas as $key) {
          array_push($ids, $key->unidadeOrgIdSubordinada);
        }
        $response = '';
        foreach ($ids as $key) {
          $response = $response . $this->recursaoGetUnidadesRaizTipoUnidade($modulo, $key, $tipoUnidade);
        }
        return $response;
      }
  }

  private function recursaoGetPaisPorFolha($modulo, $raiz, $folha){
    $unidade = UnidadeOrg::find($folha);
    if($unidade->id == $raiz){
      return $unidade->id . ',';
    }
    else{
      $response = $folha . ',';
      $pai = Subordinacao::where('unidadeOrgIdSubordinada', $folha)->where('moduloId', $modulo)->first();
      if($pai->unidadeOrgId == $raiz){
        return $response . ',';
      }
      $response = $response . $this->recursaoGetPaisPorFolha($modulo, $raiz, $pai->unidadeOrgId);
      return $response;
    }
  }



  public function getUnidadesRaizTipoUnidade($modulo, $raiz, $tipoUnidade){
      $unidadeRaiz = UnidadeOrg::find($raiz);
      if($unidadeRaiz->tipoUnidade->id == $tipoUnidade){
        return response()->json($unidadeRaiz);
      }
      $stringResponse = $this->recursaoGetUnidadesRaizTipoUnidade($modulo, $raiz, $tipoUnidade);
      $stringResponse = explode(',', $stringResponse);
      $response = [];
      $aux = [];
      $aux1 = [];
      for($i = 0; $i < sizeof($stringResponse) - 1; $i++) {
        $aux1 = [];
        $aux = $this->recursaoGetPaisPorFolha($modulo, $raiz, $stringResponse[$i]);
        $aux = explode(',', $aux);
        foreach ($aux as $key) {
          if($key != ''){
            array_push($aux1, $key);
          }
        }
        array_push($response, $aux1);
      }
      $aux = [];
      $aux1 = [];
      for($i = 0; $i < sizeof($response); $i++) {
        for($j = 0; $j < sizeof($response[$i]); $j++) {
          $aux = UnidadeOrg::find($response[$i][$j]);
          $response[$i][$j] = [
                                'id' => $aux->id,
                                'nome' => $aux->nome,
                                'tipoUnidade' => $aux->tipoUnidade->nome,
                              ];
        }
      }


      return response()->json($response, 200);


  }







}
