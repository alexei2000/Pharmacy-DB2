@extends ('layouts.app')


@section('content')
    <div class="wrapper laboratorio">
        <h1>{{ $laboratorio->name }}</h1>
        <p class="">{{ $laboratorio->name }} </p>
        <p class="">{{ $laboratorio->address }} </p>
       

        <p>{{ route('medicines.destroy', $laboratorio->id) }}</p>
        <form action="{{ route('laboratories.destroy', $laboratorio->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Borrar laboratorio</button>
        </form>
    </div>
    <a href="/laboratorios" class="back">Atras</a>
@endsection
