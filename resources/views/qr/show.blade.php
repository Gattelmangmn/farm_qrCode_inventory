@extends('layouts.main')
@section('content')
<div class="container">
    <h1>{{$ingredients->title}}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Дата сканирования</th>
            <th scope="col">Пользователь</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($infoScans as $infoScan)
            <tr>
                <th scope="row">{{$infoScan->id}}</th>
                <td>{{$infoScan->created_at}}</td>
                <td>{{$infoScan->user->name}}</td>
                <td>
                    <form method="POST" action="{{ route('infoScan.delete', $infoScan->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="m-4 d-flex flex-row gap-4">
        <a href="{{route('qr.edit' , $ingredients->id)}}" class="btn btn-success">Изменить</a>
        <form method="POST" action="{{ route('qr.delete', $ingredients->id) }}">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Delete">
        </form>
</div>
@endsection
