@extends('layouts.appLayout')

@section('content')
    <p><a href="{{ route('laboratorios.edit', $laboratorio->id) }}">editar</a></p>
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
@endsection
