@extends('layouts.tema')

@section('contenido')

<h1>
  Listado de Alumnos
</h1>
<div class='row' >
  <div class="col-md-12">
    <table class="table">
      <thead>
          <th>ID</th>
          <th>Nombre</th>
          <th>Código</th>
          <th>Carrera</th>
      </thead>
      <tbody>
        @foreach($alumnos as $alu)
          <tr>
            <td>{{ $alu->id }}</td>
            <td>{{ $alu->nombre }}</td>
            <td>{{ $alu->codigo }}</td>
            <td>{{ $alu->carrera }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection