<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function getAll()
    {
        $usuarios = usuarios::all();
        return $usuarios;
    }
    public function add(Request $request)
    {
        $usuarios = usuarios::create($request->all());
        return $usuarios;
    }
    public function get($id)
    {
        $usuarios = usuarios::find($id);
        return response()->json([
            'data' => $usuarios,
            'message' => 'resource created'
        ], 201);
    }
    public function edit($id, Request $request)
    {
        $usuarios = new usuarios();
        $usuarios = usuarios::find($id);
       $usuarios->fill($request->all())->save();
        return response()->json([
            'data' => $usuarios,
            'message' => 'resource created'
        ], 201);
    }
    public function delete($id)
    {
        $usuarios = usuarios::find($id);
        $usuarios->delete();
        return $usuarios;
    }
    
}
