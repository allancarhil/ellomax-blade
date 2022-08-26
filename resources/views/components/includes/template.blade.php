<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{url(mix('css/bootstrap.css'))}}">
    <link rel="stylesheet" href="{{url(mix('css/app.css'))}}">

    <title>Document</title>
</head>
<body>

@yield('conteudo')

@section('scripts-home')
    @include('components.includes.scripts')
@show
</body>
</html>