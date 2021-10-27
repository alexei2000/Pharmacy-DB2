@extends('layouts.appLayout')

@section('content')

<div class="wrapper crear-medicina">
        <h1>Editar laboratorio</h1>
        

        <form class="modal-dialog modal-lg fadeIn" action="{{ route('laboratorios.update', $laboratorio->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal-content">
        <div class="modal-header d-flex">
            <h5 class="modal-title">Editar Laboratorio</h5>
        </div>
        <div class="modal-body">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label class=" form-control-label">Nombre</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search-location"></i></span>
                            </div>
                            <input class="form-control" name="name" required value="{{$laboratorio->name}}">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class=" form-control-label">Dirección</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search-location"></i></span>
                            </div>
                            <input class="form-control" name="address" required value="{{$laboratorio->address}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label class="form-control-label">Telefono</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                            </div>
                            <input type="text" class="form-control" name="phone_number" required value="{{$laboratorio->phone_number}}">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label class=" form-control-label">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" name="email" required value="{{$laboratorio->email}}">
                        </div>
                    </div>
                </div>
            </div>
            
        <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="Editar" />
        </div>
    </div>
</form>
    </div>

    @endsection