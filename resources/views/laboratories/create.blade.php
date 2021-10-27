@extends('layouts.app')

@section('content')

<div class="wrapper crear-medicina">
        

    <form class="modal-dialog modal-lg fadeIn" action="/laboratorios" method="POST">
    @csrf
    <div class="modal-content">
        <div class="modal-header d-flex">
            <h5 class="modal-title">Crear Laboratorio</h5>
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
                            <input class="form-control" name="name" required>
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
                            <input class="form-control" name="address" required>
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
                            <input type="text" class="form-control" name="phone_number" required>
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
                            <input type="text" class="form-control" name="email" required>
                        </div>
                    </div>
                </div>
            </div>
            
        <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="Crear" />
        </div>
    </div>
</form>

    @endsection