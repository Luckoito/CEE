<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('includes.head')
</head>
<body>
    
    <div class="main">
        <div class="content">
            @yield('content')
        </div>
    </div>

    @yield('css')

    @yield('js')
</body>
</html>