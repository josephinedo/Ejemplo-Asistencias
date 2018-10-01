@extends('layouts.app')

@section('contenido')

<form action="materias/update/{{ $id }}" method ='POST'>
  <label for="materia">Materia:</label>
  <input type='text' name='materia' value="{{ $id }}">
  <input type='submit' value='Guardar'>
</form>

@endsection