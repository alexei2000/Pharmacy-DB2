@extends('layouts.appLayout')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body d-flex justify-content-between">
      <h4 class="box-title">Empleados</h4>
      <button type="button" class="btn btn-success btn-sm"><span><i class="mr-2 fas fa-plus"></i></span>Nuevo</button>
    </div>
    <div class="card-body--">
      <div class="table-stats order-table ov-h">
        <table class="table ">
          <thead>
            <tr>
              <th class="serial">#</th>
              <th class="avatar">Foto</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Cargo</th>
              <th>Edad</th>
              <th>Genero</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($employees as $employee)
            <tr>
              <td>{{$loop->index + 1}}</td>
              <td>
                <div class="round-img">
                  <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                </div>
              </td>
              <td> <span>{{$employee->name}}</span> </td>
              <td> <span>{{$employee->last_name}}</span> </td>
              <td><span>{{$employee->job}}</span></td>
              <td><span>{{ \Carbon\Carbon::createFromDate($employee->date_of_birth)->age
                  }}</span></td>
              @switch($employee->gender)
              @case("male")
              <td><span class="badge bg-primary">Masculino</span></td>
              @break

              @case("female")
              <td><span class="badge bg-danger">Femenino</span></td>
              @break
              @endswitch
            </tr>
            @endforeach
          </tbody>
        </table>
      </div> <!-- /.table-stats -->
    </div>
  </div> <!-- /.card -->
</div>
@endsection