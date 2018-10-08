@extends('layouts.tema')

@section('contenido')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Nueva Materias</h1>
        <p>Subtítulo</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Materias</a></li>
        <li class="breadcrumb-item"><a href="#">Nueva Materia</a></li>
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

      @if(isset($materia))
        {!! Form::model($materia, ['route' => ['materia.update', $materia->id], 'method' => 'PATCH']) !!}
        <!-- <form action="{{-- route('materia.update', $materia->id) --}}" method="POST"> -->
        <!-- <input type="hidden" name="_method" value="PATCH"> -->
      @else
        {!! Form::open(['route' => 'materia.store']) !!}
        <!-- <form action="{{-- route('materia.store') --}}" method="POST"> -->
      @endif

        {{-- csrf_field() --}}
        <div class="form-group">
          <label for="materia">Materia</label>
          {!! Form::text('materia', null, ['class' => 'form-control', 'placeholder' => 'Escriba el nombre de la materia']); !!}
          <!-- <input name="materia" value="{{-- isset($materia) ? $materia->materia : '' --}}" class="form-control" type="text" placeholder="Escriba el nombre de la materia"> -->
          <small class="form-text text-muted">Sus alumnos se podrán inscribir a su materia.</small>
        </div>
        <div class="form-group">
          <label for="seccion">Sección</label>
          {!! Form::text('seccion', null, ['class' => 'form-control']) !!}
          <!-- <input name="seccion" class="form-control" type="text"> -->
        </div>
        <div class="form-group">
          <label for="crn">CRN</label>
          {!! Form::text('crn', null, ['class' => 'form-control']) !!}
          <!-- <input name="crn" class="form-control" type="text" placeholder="CRN/NRC"> -->
        </div>
        <div class="form-group">
          <label for="salon">Salón</label>
          {!! Form::text('salon', null, ['class' => 'form-control']) !!}
          <!-- <input name="salon" class="form-control" type="text"> -->
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