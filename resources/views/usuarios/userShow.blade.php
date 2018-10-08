@extends('layouts.tema')

@section('contenido')

<div class='title'>

</div>

<div class='row' >
  <div class="col-md-12">
    <table class="table">
      <thead>
          <th>ID</th>
          <th>Materia</th>
          <th>CRN</th>
          <th>Seccion</th>
          <th>Salon</th>
          <th>Usuario</th>
      </thead>
      <tbody>
        @foreach($materias as $mat)
          <tr>
            <td>{{ $mat->id }}</td>
            <td>{{ $mat->materia }}</td>
            <td>{{ $mat->crn }}</td>
            <td>{{ $mat->seccion }}</td>
            <td>{{ $mat->salon }}</td>
            <td>{{ !empty($mat->user) ? $mat->user->name }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection