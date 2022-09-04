<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{url(mix('css/bootstrap.css'))}}">
    <link rel="stylesheet" href="{{url(mix('css/icons.css'))}}">
    <link rel="stylesheet" href="{{url(mix('css/app.css'))}}">
 
    <title>Document</title>
</head>
<body>

<nav>

<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#"><img class="logo"src="images/logonova.png" alt="IMG"></a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item active">
                    <a class="nav-link" href="/login">Comprar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">Vender</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">Arrendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">Avaliar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">Seja um franqueado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">Acessar</a>
                </li>
            </ul>
        </div>

        <ul>
  
</ul>
    </nav>
    @yield('conteudo')

@section('scripts-home')
    @include('components.includes.scripts')
@show
<!-- Footer aqui -->
</body>
</html>