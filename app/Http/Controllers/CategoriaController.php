<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        return Categoria::all();
    }

    public function store(Request $request){
        $categoria = Categoria::create($request->all());
        return response()->json($categoria, 201);
    }

    public function show($id){
        return Categoria::find($id);
    }

    public function update(Request $request, $id){
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());
        return response()->json($categoria, 200);
    }

    public function destroy($id){
        Categoria::destroy($id);
        return response()->json("Deletado com sucesso!");
    }
}
