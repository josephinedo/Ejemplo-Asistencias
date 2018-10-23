<?php

namespace App\Http\Controllers;

use App\Materia;
use App\Alumno;
use Illuminate\Http\Request;

class AlumnoMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function index(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function create(Alumno $alumno)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Alumno $alumno)
    {
        $alumno->materias()->attach($request->materias);
        return redirect()->route('alumno.show',$alumno->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno, Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno, Materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno, Materia $materia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno, Materia $materium)
    {
        /* 
        Se debe tener cuidado de conservar el mismo nombre que el de route:list, en este caso
        el sistema falló porque en lugar de $materium se tenía $materia
        */
        $alumno->materias()->detach($materium->id);
        return redirect()->route('alumno.show', $alumno->id);
    }
}
