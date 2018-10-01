@extends('layouts.tema')

@section('contenido')

<div class='row'>
  <div class='col-md-12'>
    <div class='title'>
      <form action="{{ route('materia.store') }}" method ='POST'>
        {{ csrf_field() }}
        <div class="form-group">
          <label for="materia">Materia:</label>
          <input  name='materia' class="form-control" type='text' placeholder="Escriba el nombre de la materia">
          <small class="form-text text-muted">Sus alumnos se podrán inscribir a su materia</small> 
        </div>
        <div class="form-group">
          <label for="seccion">Sección:</label>
          <input  name='seccion' class="form-control" type='text' placeholder="Escriba el nombre de la sección">
          <small class="form-text text-muted">Sus alumnos se podrán inscribir a su materia</small> 
        </div>
        <div class="form-group">
          <label for="crn">CRN:</label>
          <input  name='crn' class="form-control" type='text' placeholder="CRN/NRC">
          <small class="form-text text-muted">Sus alumnos se podrán inscribir a su materia</small> 
        </div>
        <div class="form-group">
          <label for="salon">Salón:</label>
          <input  name='salon' class="form-control" type='text'>
          <small class="form-text text-muted">Sus alumnos se podrán inscribir a su materia</small> 
        </div>
        <div class='title-folder'>
          <button class="btn btn-primary" type="submit">Aceptar</button>  
        </div>
      </form>
    </div>
  </div>
</div>
 


@endsection