<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::all();
        return view('materias.materiaIndex', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.materiaForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'materia' => 'required|min:5',
          'seccion' => 'required|max:5',
          'crn' => 'required|integer',
          'salon' => 'required'
        ]);

        /*
        $materia = new Materia();
        $materia->user_id = \Auth::id();
        $materia->materia = $request->input('materia');
        $materia->seccion = $request->input('seccion');
        $materia->crn = $request->crn;
        $materia->salon = $request->salon;
        $materia->save();
        */

        //Agrega 'user_id' al request para que se inserte a la base de datos
        $request->merge(['user_id' => \Auth::id()]);

        //Debe estar $fillable o $guarded declarados en el Modelo
        Materia::create($request->all());
      
        return redirect()->route('materia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materium)
    {
        //Pasa la información en la variable $materium como $materia a la vista
        return view('materias.materiaShow')->with(['materia' => $materium]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materium)
    {
        return view('materias.materiaForm')->with(['materia' => $materium]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materium)
    {
        $request->validate([
          'materia' => 'required|min:5',
          'seccion' => 'required|max:5',
          'crn' => 'required|integer',
          'salon' => 'required'
        ]);

      /*
        $materium->materia = $request->materia;
        $materium->crn = $request->crn;
        $materium->salon = $request->salon;
        $materium->seccion = $request->input('seccion');
        $materium->save();
      */
        Materia::where('id', $materium->id)->update($request->except('_token', '_method'));
      
        return redirect()->route('materia.show', $materium->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materium)
    {
        $materium->delete();
        return redirect()->route('materia.index');
    }
}
