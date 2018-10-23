@extends('layouts.tema')

@section('contenido')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Información de Alumno</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Alumnos</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Detalle de Alumno</div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Códido</th>
                        <th>Carrera</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $alumnos->id }}</td>
                            <td>{{ $alumnos->nombre }}</td>
                            <td>{{ $alumnos->codigo }}</td>
                            <td>{{ $alumnos->carrera }}</td>
                        </tr>
                    </tbody>
                </table>
                <a class="btn btn-warning" href="{{ route('alumno.edit',$alumnos) }}">Editar</a>
                <hr>
                <!-- Eliminar registro -->
                <form action="{{ route('alumno.destroy',$alumnos) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
    	<div class="card-body">
			{!! Form::open(['route'=>[ 'alumno.materia.store', $alumnos->id]]) !!}
			{!! Form::label('materias','Materias')!!}
			<select name="materias" class="form-control">
				@foreach($materias as $materia)
					<option value="{{ $materia->id }}">{{ $materia->materia }}</option>
				@endforeach
			</select>
			{!! Form::submit("Aceptar",['class' => "btn btn-sm btn-primary"]) !!}
			{!! Form::close() !!}

            <hr>

            <ul>
                @foreach ($alumnos->materias as $mat)
                    <li> 
                        {{ $mat->materia }}
                    </li>
                    <form action="{{ route( 'alumno.materia.destroy', [ 'alumno' => $alumnos, 'materium' => $mat] ) }}" method="POST">
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