@extends('layouts.app')

@section('content')

<div class="wrapper crear-medicina">
        <h1>Crear laboratorio</h1>
        <form action="/laboratorios" method="POST">
            @csrf
            <!-- <label for="laboratorio">Laboratorio</label>
            <input type="text" id="laboratorio" name="laboratorio"> -->

            <label for="name">Nombre</label>
            <input type="text" id="name" name="name">

            <label for="address">Dirección</label>
            <input type="text" id="address" name="address">

            <label for="email">Email</label>
            <input type="text" id="email" name="email">

            <label for="phone_number">Telefono</label>
            <input type="text" id="phone_number" name="phone_number">

           
            <input type="submit" value="Crear Laboratorio">
        </form>
    </div>

    @endsection