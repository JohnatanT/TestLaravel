<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/painel/css/style.css')}}">
    <title>{{$title or 'Gestão de Produtos'}}</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    

    <script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>