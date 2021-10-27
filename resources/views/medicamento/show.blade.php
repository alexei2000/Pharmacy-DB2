@extends('layouts.appLayout')

@section('content')
    <div class="container">
        <div class="card">
        <div class="card-body">
        <a href="{{ route('medicinas.edit', $medicina->id) }}"><button class="btn">Editar</button></a>
    <div class="wrapper medicina">
        <h1 class="box-title">{{ $medicina->name }}</h1>
        <p class="">{{ $medicina->principal_component }} </p>
        <p class="">{{ $medicina->monodrug }} </p>
       

        <form action="{{ route('medicinas.destroy', $medicina->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Borrar medicina</button>
        </form>
    </div>
    <a href="/medicinas" class="back">Back</a>
        
        </div>
        </div>
    </div>

    
@endsection