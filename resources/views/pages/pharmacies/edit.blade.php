@extends('layouts.appLayout')

@section('content')

<form class="modal-dialog modal-lg fadeIn" action="{{ route('pharmacies.update', $pharmacy) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal-content">
        <div class="modal-header d-flex">
            <h5 class="modal-title">Editar Farmacia</h5>
        </div>
        <div class="modal-body">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label class=" form-control-label">Estado</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search-location"></i></span>
                            </div>
                            <input value="{{ $pharmacy->state }}" class="form-control" name="state" required>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class=" form-control-label">Ciudad</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search-location"></i></span>
                            </div>
                            <input value="{{ $pharmacy->city }}" class="form-control" name="city" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label class="form-control-label">Código postal</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                            </div>
                            <input value="{{ $pharmacy->postal_code }}" type="text" class="form-control"
                                name="postal_code" required>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label class=" form-control-label">Dirección</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <input value="{{ $pharmacy->address }}" type="text" class="form-control" name="address"
                                required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label class=" form-control-label">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input value="{{ $pharmacy->email }}" type="email" class="form-control" name="email"
                                required>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label class=" form-control-label">Número de teléfono</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input value="{{ $pharmacy->phone_number }}" type="tel" class="form-control"
                                name="phone_number" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a class="btn btn-secondary" href="{{ route('pharmacies.show', $pharmacy) }}">Volver</a>
            <input type="submit" class="btn btn-primary" value="Guardar" />
        </div>
    </div>
</form>
@endsection