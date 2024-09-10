@extends('layouts.user')
@section('title')
    Настройки пользователя |  {{ Auth::user()->name }}
@endsection
@section('content')
    <div class="container">
        <h1>Настройки пользователя</h1>
        <form action="{{ route('settings.update') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Изменить Почту</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Тут вы можете поменять вашу почту</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Ваше имя</label>
                <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                <div id="nameHelp" class="form-text">Тут вы можете поменять ваше Имя</div>
            </div>
            <div class="d-flex mb-3 mb-lg-4">
                <button type="submit" data-mdb-button-init="" data-mdb-ripple-init="" class="btn btn-dark btn-lg" data-mdb-button-initialized="true">Сохранить</button>
            </div>
        </form>
        <h3>Смена пароля</h3>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('settings.update.password') }}">
            @csrf

            <div class="mb-3">
                <label for="exampleInputCurrentPassword" class="form-label">Действующий пароль</label>
                <input type="password" name="current_password" class="form-control" id="exampleInputCurrentPassword" aria-describedby="currentPasswordHelp">
                <div id="currentPasswordHelp" class="form-text">Введите ваш пароль</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputNewPassword" class="form-label">Новый пароль</label>
                <input type="password" name="new_password" class="form-control" id="exampleInputNewPassword" aria-describedby="newPasswordHelp">
                <div id="newPasswordHelp" class="form-text">Введите ваш новый пароль</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputNewPasswordConfirmation" class="form-label">Подтверждение нового пароля</label>
                <input type="password" name="new_password_confirmation" class="form-control" id="exampleInputNewPasswordConfirmation" aria-describedby="newPasswordConfirmationHelp">
                <div id="newPasswordConfirmationHelp" class="form-text">Подтвердите ваш пароль</div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="d-flex mb-3 mb-lg-4">
                <button type="submit" class="btn btn-dark btn-lg">Изменить</button>
            </div>
        </form>
        </form>
    </div>
@endsection
