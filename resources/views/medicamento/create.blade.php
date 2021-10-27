@extends('layouts.appLayout')

@section('content')

<form class="modal-dialog modal-lg fadeIn" action="/medicinas" method="POST">
    @csrf
    <div class="modal-content">
        <div class="modal-header d-flex">
            <h5 class="modal-title">Crear Medicina</h5>
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
                        <label class=" form-control-label">Componente Principal</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search-location"></i></span>
                            </div>
                            <input class="form-control" name="principal_component" required>
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
                            <input type="text" class="form-control" name="monodrug" required>
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
                            <input type="text" class="form-control" name="content" required>
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
                            <select name="unit" id="unit">
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
                            <input type="tel" class="form-control" name="therapeutic_action" required>
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



    @endsection