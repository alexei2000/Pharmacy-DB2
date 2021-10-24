@extends('layouts.app')

@section('content')

<!-- Ruta para crear laboratorio -->
<a href="{{ route('laboratories.create') }}">crear</a>

<div class="laboratories-wrapper">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Email</th>
            <th>Telefono</th>
        </tr>

        @foreach($laboratorios as $labo)
        <tr>
            <td>{{ $labo->name }} </td>
            <td>{{ $labo->address }} </td>
            <td>{{ $labo->email }} </td>
            <td>{{ $labo->phone_number }} </td>
        </tr>

        @endforeach
    </table>
</div>


@endsection