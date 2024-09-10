@extends('layouts.user')

@section('title')
    Просмотр ингридиентов | {{ Auth::user()->name }}
@endsection

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Имя</th>
                <th scope="col">Дата создания</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ingredients as $ingredient)
                <tr>
                    <th scope="row">{{$ingredient->id}}</th>
                    <td>{{$ingredient->title}}</td>
                    <td>{{$ingredient->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
