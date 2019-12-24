<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

abstract class BaseController
{
    protected $classe;

    public function index()
    {
        return $this->classe::all();
    }

    public function store(Request $request)
    {
        return response()->json(
            $this->classe::create(
                $request->all()
        ), 201);
    }

    public function show(int $id){

        $recueso = $this->classe::find($id);
        if (is_null($recueso)){
            return response()->json('', 404);
        }

        return response()->json($recueso);
    }

    public function update(int $id, Request $request){

        $recurso = $this->classe::find($id);
        if (is_null($recurso)){
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }
        $recurso->fill($request->all());
        $recurso->save();
    }

    public function destroy(int $id){

        $recursoRemovido = $this->classe::destroy($id);
        if ($recursoRemovido === 0){
            return response()->json([
                'erro' => 'Recurso não encontrado.'
            ], 404);
        }
        return response()->json('', 204);
    }
}
