@extends('layouts.app')

@section('content')

<form action="materias/store" method ='POST'>
  <label for="materia">Materia:</label>
  <input type='text' name='materia'>
  <input type='submit' value='Guardar'>
</form>

@endsection