@extends('layouts.main')
@section('content')
    <div class="container mt-5">
        <form action="{{ route('qr.update', $ingredients->id) }}" method="post">
            @csrf
            @method('PATCH')
            <h2 class="mb-4">Изменение</h2>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Название ингридиента</label>
                <input type="text" name="title" class="form-control" id="Name" value="{{$ingredients->title}}" placeholder="Название">
            </div>
            <div class="fs-6 p-1">Если вы хотите поменять только QR не пишите название</div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
@endsection
