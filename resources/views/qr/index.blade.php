@extends('layouts.main')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Имя</th>
                <th scope="col">QR</th>
                <th scope="col">QR-change</th>
                <th scope="col">qr-code id</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ingredients as $ingredient)
            <tr>
                    <th scope="row">{{$ingredient->id}}</th>
                <td><a href="{{route('show', $ingredient->id)}}">{{$ingredient->title}}</a></td>
                <td>{!! DNS2D::getBarcodeHTML("$ingredient->ingredients_code", 'QRCODE', 5, 5) !!} </td>
                <td>
                    <form method="POST" action="{{ route('ingredients.updateCode', ['ingredient' => $ingredient]) }}">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-primary" type="submit">Сменить QR-код</button>
                    </form>
                </td>
                    <td>{{$ingredient->ingredients_code}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
