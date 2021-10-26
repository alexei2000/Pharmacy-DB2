@extends('layouts.appLayout')

@section('content')
<div class="container fadeIn">
    <div class="card">
        <div class="card-body">
            <div class="box-title">
                Farmacia
            </div>
        </div>
        <div class="card-body">
            <p>
                <small class="text-muted">Creado: {{ $pharmacy->created_at }}</small>
            </p>
            <p>
                <small class="text-muted">Última actualización: {{ $pharmacy->updated_at }}</small>
            </p>
            <dl class="row">
                <dt class="col-3">Estado</dt>
                <dd class="col-9">{{ $pharmacy->state }}</dd>
                <dt class="col-3">Ciudad</dt>
                <dd class="col-9">{{ $pharmacy->city }}</dd>
                <dt class="col-3">Código Postal</dt>
                <dd class="col-9">{{ $pharmacy->postal_code }}</dd>
                <dt class="col-3">Número de teléfono</dt>
                <dd class="col-9">{{ $pharmacy->phone_number }}</dd>
                <dt class="col-3">Correo electrónico</dt>
                <dd class="col-9">{{ $pharmacy->email }}</dd>
                <dt class="col-3">Dirección</dt>
                <dd class="col-9">{{ $pharmacy->address }}</dd>
            </dl>
        </div>
        <div class="card-body">
            <a class="btn btn-primary" href="#">Editar</a>
            <button class="btn btn-danger" type="button" data-toggle="modal"
                data-target="#confirm-delete-pharmacy">Eliminar</button>
        </div>
    </div>
</div>
<div id="confirm-delete-pharmacy" class="modal fadeIn" tabindex="-1">
    <form class="modal-dialog" action="{{ route('pharmacies.destroy', $pharmacy->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-content">
            <div class="modal-header d-flex">
                <h5 class="modal-title">¿Seguro que desea eliminar la farmacia?</h5>
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