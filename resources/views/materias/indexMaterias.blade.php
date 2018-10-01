@extends('layouts.tema')

@section('contenido')

<h1>
  Listado de Materias
</h1>
<div class='row' >
  <div class="col-md-12">
    <table class="table">
      <thead>
          <th>ID</th>
          <th>Materia</th>
          <th>CRN</th>
          <th>Seccion</th>
          <th>Salon</th>
      </thead>
      <tbody>
        @foreach($materias as $mat)
          <tr>
            <td>{{ $mat->id }}</td>
            <td>{{ $mat->materia }}</td>
            <td>{{ $mat->crn }}</td>
            <td>{{ $mat->seccion }}</td>
            <td>{{ $mat->salon }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection