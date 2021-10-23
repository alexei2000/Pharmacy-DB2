@extends('layouts.app')

@section('content')
<p class="mssg">{{ session('mssg') }}</p>


<div class="lista-de-medicinas">

    <h2>Lista de Medicamentos</h2>
    <a href="{{ route('medicines.create') }}">Crear medicamento</a>
    
        <table>
            <tr>
                <th>Nombre</th>
                <th>Componente Principales</th>
                <th>Monodroga(s)</th>
                <th>Contenido</th>
                <th>Acción Terapeutica</th>
            </tr>
            @foreach($medicines as $medicamento)
            <tr>
            
            <td> {{ $medicamento->name }} </td>
            <td> {{ $medicamento->principal_component }} </td>
            <td> {{ $medicamento->monodrug }} </td>
            <td> {{ $medicamento->content }} </td>
            <td> {{ $medicamento->therapeutic_action }} </td>
            </tr>
            @endforeach

        </table>
    
</div>

@endsection