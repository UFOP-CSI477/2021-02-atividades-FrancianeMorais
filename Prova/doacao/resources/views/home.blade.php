<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stykesheet" href="pix.css">
    <title>Home</title> 
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
    <div id="content" class="container">
        @yield('conteudo')
    </div>


    <script src=" {{ asset('js/bootstrap.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
</body>
</html>