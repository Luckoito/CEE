<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("./css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("./css/panel.css") }}">
    <link rel="stylesheet" href="{{ asset("./css/newUserForm.css") }}">
    <title>CEE - cadastro</title>
</head>
<body>
    @component('components.panel')
        @slot('content')
            @component('components.newUserForm')
            @endcomponent
        @endslot
    @endcomponent
</body>
</html>