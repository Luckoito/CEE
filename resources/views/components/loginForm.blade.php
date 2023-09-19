<div class="flexColumn loginForm">

    <h3>Bem vindo(a)!</h3>

    <form class='flexColumn'>
        <label for='username'>Usuário</label>
        <input type='text' name='username'></input>
        <label for='password'>Senha</label>
        <input type='password' name='password'></input>

        <input type="submit" class="confirmButton"></input>
    </form>


    <div class='flexRow helpLinks space-around'>
        <a href='{{ route('newUser') }}' className='linkText' id='createAccount' tabIndex=0>Sou novo aqui!</a>
        <a href='{{ route('loginHelp') }}' className='linkText' id='forgotPassword' tabIndex=0>Ajuda</a>
    </div>

</div>