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
<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{'account'}}" class="nav-link px-2 link-secondary">Главная</a></li>
                <li><a href="{{'logscan'}}" class="nav-link px-2 link-body-emphasis">История сканирования</a></li>
                <li><a href="{{'view'}}" class="nav-link px-2 link-body-emphasis">Просмотр</a></li>
                @if(auth()->user()->hasRole('admin'))
                    <li><a href="{{'qr'}}" class="nav-link px-2 link-body-emphasis">Редакция qr</a></li>
                @endif
            </ul>
            <div class="dropdown text-end">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                    <li><div class="dropdown-item"> {{ Auth::user()->name }}</div></li>
                    <li><a class="dropdown-item" href="{{ route('account.settings') }}">Настройки</a></li>
                    @if(auth()->user()->hasRole('admin'))
                    <li><a class="dropdown-item" href="">Админ панель</a></li>
                    @endif
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form class="dropdown-item" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Выйти</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
@yield('content')
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>

