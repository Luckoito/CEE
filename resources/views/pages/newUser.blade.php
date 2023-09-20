@extends('layouts.default')

@section('links')
<link rel="stylesheet" href="{{ asset("./css/panel.css") }}">
<link rel="stylesheet" href="{{ asset("./css/newUserForm.css") }}">
@endsection

@section('content')

    @if ($errors->any())
    @component('components.toast')
        @slot('type', 3)
        @slot('title', 'Ops, ocorreu um problema 😕')
        @slot('text')
            @foreach ($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        @endslot
    @endcomponent
    @endif

    @component('components.panel')
        @slot('content')
            <div class="flexColumn loginForm">

                <h3>Novo Usuário</h3>

            
                <form class='flexColumn' action="{{route('newUserStore')}}" method="post">
                    @csrf
                    <label for='name'>Nome Completo</label>
                    <input type='text' name='name' required></input>
            
                    <label for='email'>Email</label>
                    <input type='text' name='email' required></input>
            
                    <label for='password'>Senha</label>
                    <input type='password' name='password' required></input>
            
                    <input type="submit" class="confirmButton"></input>
                </form>
            
                <div class='flexRow helpLinks space-around'>
                    <a href='{{ route('login') }}' className='linkText' id='login' tabIndex=0>Login</a>
                    <a href='{{ route('loginHelp') }}' className='linkText' id='forgotPassword' tabIndex=0>Ajuda</a>
                </div>
            
            </div>
        @endslot
    @endcomponent
@endsection