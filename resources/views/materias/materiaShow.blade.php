@extends('layouts.tema')

@section('contenido')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Información de Materia</h1>
        <p>{{ $materia->materia }}</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Materias</a></li>
    </ul>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Detalle de materia</div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Materia</th>
                        <th>Sección</th>
                        <th>CRN</th>
                        <th>Salón</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $materia->id }}</td>
                            <td>{{ $materia->materia }}</td>
                            <td>{{ $materia->seccion }}</td>
                            <td>{{ $materia->crn }}</td>
                            <td>{{ $materia->salon }}</td>
                        </tr>
                    </tbody>
                </table>

                <a class="btn btn-warning" href="{{ route('materia.edit', $materia->id) }}">Editar</a>
                <hr>
                <!-- Eliminar registro -->
                <form action="{{ route('materia.destroy', $materia->id) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
              
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card-body">
            {!! Form::open(['route'=>[ 'materia.agrega-alumno']]) !!}
            {!! Form::label('alumno')!!}
            <input type="hidden" value="{{ $materia->id }}" name="materia">
            <select name="alumno" class="form-control">
                @foreach($alumnos as $alu)
                    <option value="{{ $alu->id }}">{{ $alu->nombre }}</option>
                @endforeach
            </select>
            {!! Form::submit("Aceptar",['class' => "btn btn-sm btn-primary"]) !!}
            {!! Form::close() !!}
            <hr>
            <ul>
                @foreach ($materia->alumnos as $alu)
                    <li> 
                        {{ $alu->nombre }}
                    </li>
                    <form action="{{ route( 'alumno.materia.destroy', [ 'alumno' => $alu, 'materium' => $materia] ) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="Eliminar"></input>
                    </form>
                @endforeach
            </ul>

        </div>
    </div>

</div>
@endsection
