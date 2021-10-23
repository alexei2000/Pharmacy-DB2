@extends ('layouts.app')

@section('content')
    <div class="wrapper medicina">
        <h1>{{ $medicina->name }}</h1>
        <p class="">{{ $medicina->principal_component }} </p>
        <p class="">{{ $medicina->monodrug }} </p>
       

        <p>{{ route('medicines.destroy', $medicina->id) }}</p>
        <form action="{{ route('medicines.destroy', $medicina->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Borrar medicina</button>
        </form>
    </div>
    <a href="/medicinas" class="back">Back</a>
@endsection