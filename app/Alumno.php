<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
	protected $fillable = ['nombre', 'codigo', 'carrera'];
	public $timestanps = false;
	protected $table = 'alumnos';

    public function materias()
    {
        return $this->belongsToMany(Materia::class);
    }
}
