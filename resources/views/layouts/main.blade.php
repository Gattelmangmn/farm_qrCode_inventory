<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{route('qr.index')}}" class="nav-link active" aria-current="page">Главная</a></li>
            <li class="nav-item"><a href="{{route('create')}}" class="nav-link">Создать Qr</a></li>
            <li class="nav-item"><a href="{{route('scan')}}" class="nav-link">Сканирование Qr</a></li>
        </ul>
    </header>
</div>
@yield('content')
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>
