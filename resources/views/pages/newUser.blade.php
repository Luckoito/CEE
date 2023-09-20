@extends('layouts.default')

@section('links')
<link rel="stylesheet" href="{{ asset("./css/panel.css") }}">
<link rel="stylesheet" href="{{ asset("./css/newUserForm.css") }}">
@endsection

@section('content')
    @component('components.panel')
        @slot('content')
            @component('components.newUserForm')
            @endcomponent
        @endslot
    @endcomponent
@endsection