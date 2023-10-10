@extends('layouts.default')

@section('links')
<link rel="stylesheet" href="{{ asset("./css/panel.css") }}">
<link rel="stylesheet" href="{{ asset("./css/loginForm.css") }}">
@endsection

@section('content')
    @if(isset($notify))
        @component('components.toast')
            @slot('type', $notify['type'])
            @slot('title', $notify['title'])
            @slot('text', $notify['text'])
        @endcomponent
    @endif

    @component('components.panel')
        @slot('content')
            <div class="flexColumn loginForm">

                <h3>Bem vindo(a)!</h3>

                <form class='flexColumn' action="{{route('loginAuth')}}" method="post">
                    @csrf
                    <label for='email'>email</label>
                    <input type='text' name='email'></input>
                    <label for='password'>Senha</label>
                    <input type='password' name='password'></input>

                    <input type="submit" class="confirmButton"></input>
                </form>


                <div class='flexRow helpLinks space-around'>
                    <a href='{{ route('newUser') }}' className='linkText' id='createAccount' tabIndex=0>Sou novo aqui!</a>
                    <a href='{{ route('loginHelp') }}' className='linkText' id='forgotPassword' tabIndex=0>Ajuda</a>
                </div>

            </div>
        @endslot
    @endcomponent
@endsection
