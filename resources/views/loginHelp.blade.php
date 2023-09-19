<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("./css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("./css/panel.css") }}">
    <title>CEE - Ajuda com o login</title>
</head>
<body>
    @component('components.panel')
        @slot('content')
            <h1>Ajuda</h1>
        @endslot
    @endcomponent
</body>
</html>