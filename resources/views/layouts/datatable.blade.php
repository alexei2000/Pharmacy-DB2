@extends('layouts.appLayout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body d-flex justify-content-between">
            <h4 class="box-title">@yield('title', $title)</h4>
            <button onclick="document.location = '{{ route($create_route) }}'" type="button"
                class="btn btn-success btn-sm">
                <span><i class="mr-2 fas fa-plus"></i></span>
                Nueva
            </button>
        </div>
        <div class="card-body--">
            @php
            $onclickitem = fn($item) => "document.location = '" . route($show_route, $item->id) . "'";
            @endphp
            <x-table :items="$items" :columns="$columns" :onclickrow="$onclickitem" />
        </div>
    </div> <!-- /.card -->
</div>
@endsection