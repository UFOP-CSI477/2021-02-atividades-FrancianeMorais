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

    <h3>Olá! Acesse os dados nos links abaixo.</h3>
    <div>
    <a href="{{route('items')}}"class="nav-link justify-content-center px-2 link-secondary">Itens</a>
            <a href="{{route('entidades')}}"class="nav-link justify-content-center px-2 link-secondary">Entidades</a>
            <a href="{{route('coletas')}}"class="nav-link justify-content-center px-2 link-secondary">Coletas</a><br>
    
    </div>
        
</div><br>
    
    
    <div id="content" class="container">
    
        @yield('conteudo')
    </div>
<div>
<form action="{{route('logout')}}" method="post">
        @csrf
        <input type="submit" value="Logout" class="btn btn-primary">
        </form>
</div>    


    <script src=" {{ asset('js/bootstrap.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    
    
</body>
</html>