@extends('layouts.tema')

@section('contenido')

<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Nuevo Alumno</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Alumnos</a></li>
        <li class="breadcrumb-item"><a href="#">Nuevo Alumno</a></li>
    </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      @if(isset($alumno))
        {!! Form::model($alumno, ['route' => ['alumno.update', $alumno->id], 'method' => 'PATCH']) !!}
        <!-- <form action="{{-- route('alumno.update', $alumno->id) --}}" method="POST"> -->
        <!-- <input type="hidden" name="_method" value="PATCH"> -->
      @else
        {!! Form::open(['route' => 'alumno.store']) !!}
        <!-- <form action="{{-- route('alumno.store') --}}" method="POST"> -->
      @endif

        {{-- csrf_field() --}}
        <div class="form-group">
          <label for="nombre">Nombre</label>
          {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Escriba el nombre del alumno']); !!}
          <!-- <input name="nombre" value="{{-- isset($alumno) ? $alumno->nombre : '' --}}" class="form-control" type="text" placeholder="Escriba el nombre del alumno"> -->
          <small class="form-text text-muted">Nombre completo del alumno.</small>
        </div>
        <div class="form-group">
          <label for="codigo">Código</label>
          {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
          <!-- <input name="codigo" class="form-control" type="text"> -->
        </div>
        <div class="form-group">
          <label for="carrera">Carrera</label>
          {!! Form::text('carrera', null, ['class' => 'form-control']) !!}
          <!-- <input name="crn" class="form-control" type="text" placeholder="CRN/NRC"> -->
        </div>
        
        <div class="tile-footer">
          <button class="btn btn-primary" type="submit">Aceptar</button>
        </div>
      {!! Form::close() !!}
      <!-- </form> -->
    </div>
  </div>
</div>

@endsection