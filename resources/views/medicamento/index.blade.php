@extends('layouts.appLayout')

@section('content')
<p class="mssg">{{ session('mssg') }}</p>


<div class="container">
  <div class="card">
    <div class="card-body d-flex justify-content-between">
      <h4 class="box-title">Medicamentos</h4>

      @if(Auth::check() && Auth::user()->hasRole('admin'))

      <button onclick="document.location = '{{route('medicinas.create')}}'" type="button"
        class="btn btn-success btn-sm"><span><i class="mr-2 fas fa-plus"></i></span>Nuevo</button>
      @endif
    </div>
    <div class="card-body--">
      <div class="table-stats order-table ov-h">
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="serial">#</th>
              <th>Laboratorio</th>
              <th>Nombre</th>
              <th>Componente Principal</th>
              <th>Monodroga(s)</th>
              <th>Contenido</th>
              <th>Acción terapeutica</th>
            </tr>
          </thead>
          <tbody>
            @foreach($medicines as $medicamento)
            <tr style="cursor: pointer" onclick="document.location = '{{route('medicinas.show', $medicamento->id)}}'">
              <td>{{$loop->index + 1}}</td>

              <td> <span>{{$medicamento->name}}</span> </td>
              <td> <span>{{$medicamento->principal_component}}</span> </td>
              <td><span>{{$medicamento->monodrug}}</span></td>
              <td><span>{{$medicamento->content }} {{$medicamento->unit}} </span></td>
              <td><span>{{$medicamento->therapeutic_action}} </span></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div> <!-- /.table-stats -->
    </div>
  </div> <!-- /.card -->
</div>

@endsection