@extends('layouts.appLayout')

@section('content')





<div class="container fadeiI">
  <div class="card">
    <div class="card-body d-flex justify-content-between">
      <h4 class="box-title">Laboratorios</h4>

      @if(Auth::check() && Auth::user()->hasRole('admin'))

      <button onclick="document.location = '{{route('laboratorios.create')}}'" type="button"
        class="btn btn-success btn-sm"><span><i class="mr-2 fas fa-plus"></i></span>Nuevo</button>
      @endif
    </div>
    <div class="card-body--">
      <div class="table-stats order-table ov-h">
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="serial">#</th>
              <th>Nomnbre</th>
              <th>Dirección</th>
              <th>Email</th>
              <th>Telefono</th>
            </tr>
          </thead>
          <tbody>
            @foreach($laboratorios as $labo)
            <tr style="cursor: pointer" onclick="document.location = '{{route('laboratorios.show', $labo->id)}}'">
              <td>{{$loop->index + 1}}</td>
              <td>{{$labo->name}}</td>
              <td> <span>{{$labo->address}}</span> </td>
              <td> <span>{{$labo->email}}</span> </td>
              <td><span>{{$labo->phone_number}}</span></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div> <!-- /.table-stats -->
    </div>
  </div> <!-- /.card -->
</div>

@endsection