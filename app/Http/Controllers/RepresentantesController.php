<?php

namespace App\Http\Controllers;

use App\representantes;
use Illuminate\Http\Request;

class RepresentantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $representantes = representantes::all();
        
        return view('representantes.index', compact('representantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('representantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $representantes = new representantes();
        $representantes->nombre = $request->input('nombre');
        $representantes->apellido = $request->input('apellido');
        $representantes->cedula = $request->input('cedula');
        $representantes->fecha = $request->input('fecha');
        $representantes->civil = $request->input('civil');
        $representantes->profesion = $request->input('profesion');
        $representantes->telefono = $request->input('telefono');
        $representantes->direccion = $request->input('direccion');
        $representantes->lugardv = $request->input('lugardv');
        $representantes->save();

        return redirect()->route('representantes.create')->with('msj-crear', 'El Representante ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\representantes  $representantes
     * @return \Illuminate\Http\Response
     */
    public function show(representantes $representantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\representantes  $representantes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $representante = representantes::find($id);
        
        return view('representantes.edit', compact('representante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\representantes  $representantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $representante = representantes::find($id);
        $representante->nombre = $request->input('nombre');
        $representante->apellido = $request->input('apellido');
        $representante->cedula = $request->input('cedula');
        $representante->fecha = $request->input('fecha');
        $representante->civil = $request->input('civil');
        $representante->profesion = $request->input('profesion');
        $representante->telefono = $request->input('telefono');
        $representante->direccion = $request->input('direccion');
        $representante->lugardv = $request->input('lugardv');
        $representante->save();

        return redirect()->route('representantes.index')->with('msj-exito', 'El Representante ha sido modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\representantes  $representantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $representante = representantes::find($id);
        $representante->delete();

        return redirect()->route('representantes.index')->with('msj-delete', 'El Representante ha sido eliminado correctamente.');
    }
}
