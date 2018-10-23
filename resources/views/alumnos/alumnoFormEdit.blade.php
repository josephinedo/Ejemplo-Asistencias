@extends('layouts.app')

@section('contenido')

<form action="alumnos/update/{{ $alumno->id }}" method ='POST'>
  <label for="alumno">Alumno:</label>
  <input type='text' name='alumno' value="{{ $alumno->id }}">
  <input type='submit' value='Guardar'>
</form>

@endsection