<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("./css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("./css/panel.css") }}">
    <link rel="stylesheet" href="{{ asset("./css/LoginForm.css") }}">
    <title>CEE - Login</title>
</head>
<body>
    
    @component('components.panel')
        @slot('content')
            @component('components.loginForm')
            @endcomponent
        @endslot
    @endcomponent

</body>
</html>