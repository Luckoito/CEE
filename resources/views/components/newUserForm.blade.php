<div class="flexColumn loginForm">

    <h3>Novo Usuário</h3>

    <form class='flexColumn' action="novoUsuario" method="post">
        @csrf
        <label for='nome'>Nome Completo</label>
        <input type='text' name='nome'></input>

        <label for='email'>Email</label>
        <input type='text' name='email'></input>

        <label for='senha'>Senha</label>
        <input type='password' name='senha'></input>

        <input type="submit" class="confirmButton"></input>
    </form>

    <div class='flexRow helpLinks space-around'>
        <a href='{{ route('login') }}' className='linkText' id='login' tabIndex=0>Login</a>
        <a href='{{ route('loginHelp') }}' className='linkText' id='forgotPassword' tabIndex=0>Ajuda</a>
    </div>

</div>