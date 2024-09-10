@extends('layouts.user')

@section('title')
    Личный кабинет
@endsection

@section('username')
    <h1>Добро пожаловать, {{ Auth::user()->name }}!</h1>
@endsection

@section('content')
   <div class="container">
       <h1>Добро пожаловать в кабинет! {{ Auth::user()->name }}</h1>
   </div>
@endsection

