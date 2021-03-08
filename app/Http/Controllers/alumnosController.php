<?php

namespace App\Http\Controllers;

use App\alumnosModelo;
use Illuminate\Http\Request;

class alumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = alumnosModelo::all();
        
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumnos = new alumnosModelo();
        $alumnos->nombre = $request->input('nombre');
        $alumnos->apellido = $request->input('apellido');
        $alumnos->nacimiento = $request->input('fecha');
        $alumnos->lugar_nacimiento = $request->input('lugar_nacimiento');
        $alumnos->pdoi = $request->input('pdoi');
        $alumnos->dhd = $request->input('dhd');
        $alumnos->edad = $request->input('edad');
        $alumnos->talla = $request->input('talla');
        $alumnos->peso = $request->input('peso');
        $alumnos->zapato = $request->input('zapato');
        $alumnos->od = $request->input('od');
        $alumnos->sexo = $request->input('sexo');
        $alumnos->grado = $request->input('grado');
        $alumnos->seccion = $request->input('seccion');
        $alumnos->turno = $request->input('turno');
        $alumnos->save();

        return redirect()->route('alumnos.create')->with('msj-crear', 'El Alumno ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = alumnosModelo::find($id);
        
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumnos = alumnosModelo::find($id);
        $alumnos->nombre = $request->input('nombre');
        $alumnos->apellido = $request->input('apellido');
        $alumnos->nacimiento = $request->input('fecha');
        $alumnos->lugar_nacimiento = $request->input('lugar_nacimiento');
        $alumnos->pdoi = $request->input('pdoi');
        $alumnos->dhd = $request->input('dhd');
        $alumnos->edad = $request->input('edad');
        $alumnos->talla = $request->input('talla');
        $alumnos->peso = $request->input('peso');
        $alumnos->zapato = $request->input('zapato');
        $alumnos->od = $request->input('od');
        $alumnos->sexo = $request->input('sexo');
        $alumnos->grado = $request->input('grado');
        $alumnos->seccion = $request->input('seccion');
        $alumnos->turno = $request->input('turno');
        $alumnos->save();

        return redirect()->route('alumnos.index')->with('msj-exito', 'El Alumno ha sido modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = alumnosModelo::find($id);
        $alumno->delete();

        return redirect()->route('alumnos.index')->with('msj-delete', 'El Alumno ha sido eliminado correctamente.');
    }

    public function pdf($id)
    {
        $alumno = alumnosModelo::find($id);

        return view('alumnos.pdf', compact('alumno'));
    }
}
