@extends('layouts.tema')

@section('contenido')

<div class='row'>
  <div class='col-md-12'>
    <div class='title'>
      <form action="{{ route('alumnos.store') }}" method ='POST'>
        {{ csrf_field() }}
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input  name='nombre' class="form-control" type='text' placeholder="Nombre completo">
          <small class="form-text text-muted">Escriba su nombre completo comenzando por apellidos</small> 
        </div>
        <div class="form-group">
          <label for="codigo">Código:</label>
          <input  name='codigo' class="form-control" type='text'>
        </div>
        <div class="form-group">
          <label for="carrera">Carrera:</label>
          <input  name='carrera' class="form-control" type='text' placeholder="Pseudónimo de carrera">
          <small class="form-text text-muted">Ejemplo: INCO</small> 
        </div>
        <div class='title-folder'>
          <button class="btn btn-primary" type="submit">Aceptar</button>  
        </div>
      </form>
    </div>
  </div>
</div>
 


@endsection