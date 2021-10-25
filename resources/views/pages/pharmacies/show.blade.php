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
            <pre>@json($pharmacy, JSON_PRETTY_PRINT)</pre>
        </div>
        <div class="card-body">
            <button class="btn btn-danger">Eliminar</button>
        </div>
    </div>
</div>
@endsection