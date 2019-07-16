<?php

namespace lmtsApi\Http\Controllers;

use Illuminate\Http\Request;
use lmtsApi\Curso;
use lmtsApi\Http\Requests;
use lmtsApi\Http\Controllers\Controller;

class CursoController extends Controller
{
    public function index(){                           //get: lmts.api/api/curso
        $cursos = Curso::all();
        return response()->json($cursos, 201);
    }
    public function store(Request $request){           //post: lmts.api/api/curso
        $curso = new Curso();
        $curso->fill($request->all());
        $curso->save();
        return response()->json($curso, 201);
    }
    public function update(Request $request, $id){     //put: lmts.api/api/curso/{id}
        $curso = Curso::find($id);
        if(!$curso) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }
        $curso->fill($request->all());
        $curso->save();
        return response()->json($curso);
    }
    public function destroy($id){                      //delete: lmts.api/api/curso/{id}
        $curso = Curso::find($id);

        if(!$curso) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $curso->delete(200);
    }
}
