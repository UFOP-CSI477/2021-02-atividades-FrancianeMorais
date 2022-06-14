<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/Card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('links')

    <title>@yield('title')</title>
</head>
<body>
    <div class="navbar navbar-dark bg-primary_ navbar_">
        <div class="container">
             <h1><a href="/" class="navbar-brand">Doce Lar</a></h1>

            <ul class="navbar-nav mr-auto menu-list">
                <li class="nav-item"><a href="/adoptions" class="nav-link">Adoção</a></li>
                <li class="nav-item"><a href="/donations/create" class="nav-link">Doar</a></li>
                @if (!session('id'))
                    <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="/register" class="nav-link">Cadastrar</a></li>
                @else
                    <li class="nav-item"><a href="/donations" class="nav-link">Consultar Doações</a></li>
                    <li class="nav-item"><a href="/logout" class="nav-link">Logout</a></li>
                @endif
            </ul>
        </div>
    </div>


    @yield('content')
</body>
</html>
