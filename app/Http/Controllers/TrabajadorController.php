<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajadores = Trabajador::orderBy('id','DESC')->paginate(5);
        return response()->json($trabajadores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trabajador = new Trabajador([
            'apellidos' => $request->input('apellidos'),
            'nombres'   => $request->input('nombres'),
            'direccion' => $request->input('direccion'),
            'telefono'  => $request->input('telefono'),
            'correo'    => $request->input('correo')
        ]);

        $trabajador->save();

        return response()->json('Trabajador Correctamente Registrado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajador $trabajador)
    {
        return response()->json($trabajador);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Trabajador $trabajador,Request $request)
    {
        $trabajador->update($request->all());
        return response()->json('Trabajador Correctamente Actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabajador $trabajador)
    {
        $trabajador->delete();
        return response()->json('Trabajador Eliminado Correctamente.');
    }
}
