<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function getAll()
    {
        $usuarios = usuarios::all();
        return response()->json([
            'data' => $usuarios,
            'message' => 'list ok'
        ], 201);
    }
    public function add(Request $request)
    {
        $result = usuarios::where('cedula', '=', $request->cedula)
            ->orWhere('email', '=', $request->email)
            ->get();

        if (sizeof($result) != 0) {
            return response()->json([
                'data' => $result,
                'message' => 'user duplicated'
            ], 201);
        } else {
            $usuarios = usuarios::create($request->all());
            return response()->json([
                'data' => $usuarios,
                'message' => 'resource created'
            ], 201);
        }
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
        return response()->json([
            'data' => $usuarios,
            'message' => 'user deleted'
        ], 201);
       
    }
}
