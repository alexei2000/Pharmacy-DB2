@extends('layouts.appLayout')

@section('content')

<div class="wrapper crear-medicina">
        <h1>Editar laboratorio</h1>
        <form action="{{ route('laboratorios.update', $laboratorio->id)}}" method="POST">
            @csrf
            @method('PUT')
            <!-- <label for="laboratorio">Laboratorio</label>
            <input type="text" id="laboratorio" name="laboratorio"> -->

            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" value="{{$laboratorio->name}}">

            <label for="address">Dirección</label>
            <input type="text" id="address" name="address" value="{{$laboratorio->address}}">

            <label for="email">Email</label>
            <input type="text" id="email" name="email"  value="{{$laboratorio->email}}">

            <label for="phone_number">Telefono</label>
            <input type="text" id="phone_number" name="phone_number" value="{{$laboratorio->phone_number}}">

           
            <input type="submit" value="editar Laboratorio">
        </form>
    </div>

    @endsection