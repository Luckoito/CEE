@extends('layouts.default')

@section('links')
<link rel="stylesheet" href="{{ asset("./css/panel.css") }}">
@endsection

@section('content')
    @component('components.panel')
        @slot('content')
            <h1>Ajuda</h1>
        @endslot
    @endcomponent
@endsection