@extends('layouts.appLayout')

@section('content')



    <div class="container fadeIn">
        <div class="card">
        <a href="{{ route('laboratorios.edit', $laboratorio->id) }}"><button class="btn btn-secondary">editar</button></a>
        
    <div class="wrapper laboratorio">
        <h1>{{ $laboratorio->name }}</h1>
        <p class="">{{ $laboratorio->name }} </p>
        <p class="">{{ $laboratorio->address }} </p>
       
        <form action="{{ route('laboratorios.destroy', $laboratorio->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Borrar laboratorio</button>
        </form>
    </div>
    <a href="/laboratorios" class="back">Atras</a>
        </div>
    
    </div>
@endsection
