<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Materia;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.alumnoIndex', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.alumnoForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $alumno = new Alumno();
        $alumno->nombre = $request->input('nombre');
        $alumno->codigo = $request->input('codigo');
        $alumno->carrera = $request->input('carrera');
        $alumno->save();
        */

        Alumno::create($request->all());
        return redirect()->route('alumno.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        $materias = Materia::all();
        return view('alumnos.alumnoShow')->with(['materias'=>$materias, 'alumnos'=>$alumno]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        return view('alumnos.alumnoForm')->with(['alumno' => $alumno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        Alumno::where('id', $alumno->id)->update($request->except('_token', '_method'));
      
        return redirect()->route('alumno.show', $alumno->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumno.index');
    }
}
