@extends('layouts.appLayout')

@section('content')

<div class="wrapper crear-medicina">

        <form class="modal-dialog modal-lg fadeIn" action="{{ route('medicinas.update', $medicina->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal-content">
        <div class="modal-header d-flex">
            <h5 class="modal-title">Editar Medicina</h5>
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
                            <input class="form-control" name="name" required value="{{ $medicina->name }}"> 
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class=" form-control-label">Componente Principal</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search-location"></i></span>
                            </div>
                            <input class="form-control" name="principal_component" required value="{{ $medicina->principal_component }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label class="form-control-label">Monodroga</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                            </div>
                            <input type="text" class="form-control" name="monodrug" required value="{{ $medicina->monodrug }}">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label class=" form-control-label">Contenido</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" name="content" required value="{{ $medicina->content }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label class=" form-control-label">Unidad</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <select name="unit" id="unit" value="{{ $medicina->unit }}">
                                <option value="l">l</option>
                                <option value="ml">ml</option>
                                <option value="g">g</option>
                                <option value="mg">mg</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label class=" form-control-label">Accion terapeutica</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="tel" class="form-control" name="therapeutic_action" required value="{{ $medicina->therapeutic_action }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="Crear" />
        </div>
    </div>
</form>


        
    </div>

    @endsection