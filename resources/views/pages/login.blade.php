@extends('layouts.default')

@section('links')
<link rel="stylesheet" href="{{ asset("./css/panel.css") }}">
<link rel="stylesheet" href="{{ asset("./css/loginForm.css") }}">
@endsection

@section('content')    
    @component('components.panel')
        @slot('content')
            @component('components.loginForm')
            @endcomponent
        @endslot
    @endcomponent
@endsection
