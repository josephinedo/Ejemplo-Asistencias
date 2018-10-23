@extends('layouts.tema')

@section('contenido')

<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Listado de Alumnos</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Alumnos</a></li>
    </ul>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">ALUMNOS</div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Código</th>
                        <th>Carrera</th>
                    </thead>
                    <tbody>
                        @foreach($alumnos as $alumno)
                            <tr>
                                <td>
                                  <a class="btn btn-sm btn-primary" href="{{ route('alumno.show', $alumno->id) }}">{{ $alumno->id }}</a>
                                </td>
                                <td>{{ $alumno->nombre }}</td>
                                <td>{{ $alumno->codigo }}</td>
                                <td>{{ $alumno->carrera }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection