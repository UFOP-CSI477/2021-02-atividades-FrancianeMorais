<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Área Geral</title>
</head>
<body>
<div >

<nav class="navbar justify-content-center navbar-dark bg-dark">
        <ul class="nav">
            <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('geral')}}">Área Geral</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('adm')}}">Área Administrativa</a>
            </li>
            
        </ul>
</nav>      
        
</div><br>
    <h1>Olá! Você está na Área Geral.</h1>
    <h3>Escolha uma das opções abaixo:</h3>
    <a href="{{route('coletas.relatorioent')}}"class="nav-link justify-content-center px-2 link-secondary">Lista de Entidades</a><br>
    <a href="{{route('coletas.relatorioitem')}}"class="nav-link justify-content-center px-2 link-secondary">Lista de Itens doados</a>

    <div id="content" class="container">
        @yield('conteudo')
    </div>

    
</body>
</html>