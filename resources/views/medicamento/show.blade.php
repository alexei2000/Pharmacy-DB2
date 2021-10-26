@extends('layouts.appLayout')

@section('content')
    <a href="{{ route('medicinas.edit', $medicina->id) }}">editar</a>
    <div class="wrapper medicina">
        <h1>{{ $medicina->name }}</h1>
        <p class="">{{ $medicina->principal_component }} </p>
        <p class="">{{ $medicina->monodrug }} </p>
       

        <form action="{{ route('medicinas.destroy', $medicina->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Borrar medicina</button>
        </form>
    </div>
    <a href="/medicinas" class="back">Back</a>

    <div class="container">
    <div class="card">
        <div class="card-body d-flex justify-content-between">
            <h4 class="box-title">{{$medicina->name}}</h4>
            <button onclick="document.location = '{{}}'" type="button"
                class="btn btn-success btn-sm">
                <span><i class="mr-2 fas fa-plus"></i></span>
                Editar
            </button>
        </div>
        <div class="card-body--">
           
            
        </div>
    </div> <!-- /.card -->
</div>
@endsection