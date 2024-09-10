@extends('layouts.user')

@section('title')
    История сканирования | {{ Auth::user()->name }}
@endsection

@section('username')
    <h1>Добро пожаловать, {{ Auth::user()->name }}!</h1>
@endsection

@section('content')
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Наименование</th>
            <th scope="col">Дата сканирования</th>
            <th scope="col">Пользователь</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($infoScans as $infoScan)
            <tr>
                <th scope="row">{{$infoScan->id}}</th>
                <th scope="row">{{$infoScan->ingredient->title}}</th> <!-- Изменено с ingredient_id на ingredient->title -->
                <td>{{$infoScan->created_at}}</td>
                <td>{{$infoScan->user->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-dark" href="{{route('scan')}}">Отсканировать новый QR</a>
</div>
@endsection

@section('nameuser')
    {{ Auth::user()->name }}
@endsection

