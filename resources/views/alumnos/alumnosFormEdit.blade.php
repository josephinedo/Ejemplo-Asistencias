@extends('layouts.app')

@section('contenido')

<form action="alumnos/update/{{ $id }}" method ='POST'>
  <label for="alumno">Alumno:</label>
  <input type='text' name='alumno' value="{{ $id }}">
  <input type='submit' value='Guardar'>
</form>

@endsection