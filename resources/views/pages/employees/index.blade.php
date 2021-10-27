@extends('layouts.appLayout')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body d-flex justify-content-between">
      <h4 class="box-title">Empleados</h4>

      @if(Auth::check() && Auth::user()->hasRole('admin'))
      <button onclick="document.location = '{{route('employees.create')}}'" type="button"
        class="btn btn-success btn-sm"><span><i class="mr-2 fas fa-plus"></i></span>Nuevo</button>
      @endif
    </div>
    <div class="card-body--">
      <div class="table-stats order-table ov-h">
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="serial">#</th>
              <th>Cédula</th>
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
            <tr style="cursor: pointer" onclick="document.location = '{{route('employees.show', $employee->id)}}'">
              <td>{{$loop->index + 1}}</td>
              <td>{{$employee->id}}</td>
              <td>
                <div class="round-img">
                  @if ($employee->imageUrl)
                  <img class="rounded-circle" src="/uploads/employees/{{$employee->imageUrl}}"
                    alt="{{$employee->name}}">
                  @else
                  <img class="rounded-circle" src="/no_user.jpg" alt="{{$employee->name}}">
                  @endif
                </div>
              </td>
              <td> <span>{{$employee->name}}</span> </td>
              <td> <span>{{$employee->last_name}}</span> </td>
              <td><span>{{$employee->job->name}}</span></td>
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