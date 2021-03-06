@extends('layouts.appLayout')

@section('content')
<div class="container fadeIn">
  <div class="card">
    <div class="card-header user-header alt bg-dark">
      <div class="media">
        <a href="#">
          <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="/uploads/employees/{{
            $employee->imageUrl }}">
        </a>
        <div class="media-body">
          <h2 class="text-light display-6">{{ $employee->name}} {{ $employee->last_name}}</h2>
          <p class="text-light">{{$employee->job->name}}</p>
        </div>
      </div>
    </div>
    <div class="card-body">
      <p>
        <small class="text-muted">Creado: {{ $employee->created_at }}</small>
      </p>
      <p>
        <small class="text-muted">Última actualización: {{ $employee->updated_at }}</small>
      </p>
      <div class="row">
        <div class="col">
          <dl class="row">
            <dt class="col-3">Teléfono</dt>
            <dd class="col-9">{{ $employee->phone_number }}</dd>
            <dt class="col-3">Fecha de nacimiento</dt>
            <dd class="col-9">{{ $employee->date_of_birth }}</dd>
            <dt class="col-3">Género</dt>
            @switch($employee->gender)
            @case("male")
            <dd class="col-9">Masculino</dd>
            @break
            @case("female")
            <dd class="col-9">Femenino</dd>
            @break
            @endswitch
            <dt class="col-3">Correo electrónico</dt>
            <dd class="col-9">{{ $employee->email }}</dd>
          </dl>
        </div>
      </div>
      @php
      $pharmacist = $employee->pharmacist;
      $intern = $employee->intern;
      @endphp
      @if ($pharmacist || $intern)
      <div class="card">
        <div class="card-header">
          <h4 class="box-title">
            @if ($pharmacist)
            Datos de farmaceuta
            @elseif ($intern)
            Datos de Interno
            @endif
          </h4>
        </div>
        <div class="card-body">
          @if ($pharmacist)
          <dl class="row">
            <dt class="col-4">Nº de Matrícula</dt>
            <dd class="col-8">{{ $pharmacist->tuition_number }}</dd>
            <dt class="col-4">Nº de Seguro</dt>
            <dd class="col-8">{{ $pharmacist->health_number }}</dd>
          </dl>

          <ol class="list-group">
            @php
            $degrees = $pharmacist->degrees;
            @endphp
            @foreach ($degrees as $degree)
            <li class="list-group-item">
              {{ "{$degree->name} - {$degree->university} ({$degree->date_of_graduation})" }}
            </li>
            @endforeach
          </ol>
          @elseif ($intern)
          <pre>@json($intern, JSON_PRETTY_PRINT)</pre>
          @endif
        </div>
      </div>
      @endif

    </div>

    @if(Auth::check() && Auth::user()->hasRole('admin'))

    <div class="card-body">
      <a class="btn btn-primary" href="{{ route('employees.edit', $employee) }}">Editar</a>
      <button class="btn btn-danger" type="button" data-toggle="modal"
        data-target="#confirm-delete-employee">Eliminar</button>
    </div>
    @endif
  </div>
</div>
<div id="confirm-delete-employee" class="modal fadeIn" tabindex="-1">
  <form class="modal-dialog" action="{{ route('employees.destroy', $employee->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <div class="modal-content">
      <div class="modal-header d-flex">
        <h5 class="modal-title">¿Seguro que desea eliminar el empleado?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Esta acción es irreversible.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-danger" value="Confirmar eliminación" />
      </div>
    </div>
  </form>
</div>
@endsection