<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        return response()->json(Producto::with([
            'categoria'
        ])->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $producto = Producto::create([
            'categoria_id' => $request->categoria_id,
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad,
            'kilos' => $request->kilos,
            'imagen_table' => "https://via.placeholder.com/185x110",
            'imagen' => "https://via.placeholder.com/223x167"
        ]);

        return response()->json($producto);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        $producto = Producto::where('id', $request->id)->update([
            'categoria_id' => $request->categoria_id,
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad,
            'kilos' => $request->kilos,
        ]);

        return response()->json($producto);
    }

    public function destroy(Request $request)
    {
        $producto = Producto::find($request->id);
        $producto->delete();
        return response()->json(["status" => 200]);
    }
}
