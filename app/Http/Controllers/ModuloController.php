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
        return 'id:' . $unidade->id . ',';
      }
      else{
        $subordinadas = Subordinacao::where('unidadeOrgId', $raiz)->where('moduloId', $modulo)->get();
        $ids = [];
        foreach ($subordinadas as $key) {
          array_push($ids, $key->unidadeOrgIdSubordinada);
        }
        $response = 'id:' . $raiz . '>';
        // dd($subordinadas);
        foreach ($ids as $key) {
          $response = $response . $this->recursaoGetUnidadesRaizTipoUnidade($modulo, $key, $tipoUnidade);
        }
        $response = $response . '!';
        return $response;
      }
  }


  public function getUnidadesRaizTipoUnidade($modulo, $raiz, $tipoUnidade){
      $unidadeRaiz = UnidadeOrg::find($raiz);
      if($unidadeRaiz->tipoUnidade->id == $tipoUnidade){
        return response()->json($unidadeRaiz);
      }
      $stringResponse = $this->recursaoGetUnidadesRaizTipoUnidade($modulo, $raiz, $tipoUnidade);
      $stringResponse = str_replace('id:' . $raiz . '>', '', $stringResponse);
      $stringResponse = explode('!', $stringResponse);
      $ids = [];
      for($i = 0; $i < (sizeof($stringResponse)-2); $i++){
        if($stringResponse[$i] == ('id:' . $raiz . '>')){
          continue;
        }
        array_push($ids, $stringResponse[$i]);
      }
      for($i = 0; $i < sizeof($ids); $i++) {
        $ids[$i] = explode('>', $ids[$i]);
      }
      for($i = 0; $i < sizeof($ids); $i++) {
        for($j = 0; $j < sizeof($ids[$i]); $j++) {
          $ids[$i][$j] = explode(',', $ids[$i][$j]);
        }
      }
      $aux = [];
      for($i = 0; $i < sizeof($ids); $i++) {
        if($ids[$i][0][0] != ''){
          array_push($aux, $ids[$i]);
        }
      }
      $ids = $aux;
      for($i = 0; $i < sizeof($ids); $i++) {
        for($j = 0; $j < sizeof($ids[$i]); $j++) {
          for($k = 0; $k < sizeof($ids[$i][$j]); $k++) {
            if($ids[$i][$j][$k] != ''){
              $aux = [];
              $idAux = explode(':', $ids[$i][$j][$k]);
              $unidadeAux = UnidadeOrg::find($idAux[1]);
              array_push($aux, [
                                'id' => $unidadeAux->id,
                                'nome' => $unidadeAux->nome,
                                'tipoUnidade' => $unidadeAux->tipoUnidade->nome,
                               ]);
              $ids[$i][$j][$k] = $aux;
            }
          }
        }
      }

      return response()->json($ids, 200);


  }







}
