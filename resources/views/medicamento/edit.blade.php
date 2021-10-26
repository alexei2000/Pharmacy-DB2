@extends('layouts.appLayout')

@section('content')

<div class="wrapper crear-medicina">
        <h1>Crear medicina</h1>
        <form action="{{ route('medicinas.update', $medicina->id) }}" method="POST">
            @csrf
            <!-- <label for="laboratorio">Laboratorio</label>
            <input type="text" id="laboratorio" name="laboratorio"> -->

            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" value="{{ $medicina->name }}">

            <label for="principal_component">Componente Principal</label>
            <input type="text" id="principal_component" name="principal_component" value="{{ $medicina->principal_component }}">

            <label for="monodrug">Monodroga</label>
            <input type="text" id="monodrug" name="monodrug" value="{{ $medicina->monodrug }}">

            <label for="content">Contenido</label>
            <input type="text" id="content" name="content" value="{{ $medicina->content }}">

            <label for="unit">Unidad</label>
            <select name="unit" id="unit" value="{{ $medicina->unit }}">
                <option value="l">l</option>
                <option value="ml">ml</option>
                <option value="g">g</option>
                <option value="mg">mg</option>
            </select>
            
            <label for="therapeutic_action">Accion Terapeutica</label>
            <input type="text" id="therapeutic_action" name="therapeutic_action" value="{{ $medicina->therapeutic_action }}">
            

           
            <input type="submit" value="Crear Medicina">
        </form>
    </div>

    @endsection