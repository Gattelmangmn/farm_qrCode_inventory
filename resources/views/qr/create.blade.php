@extends('layouts.main')
@section('content')
    <div class="container mt-5">
        <form action="{{route('qr.store')}}" method="post">
        @csrf
            <h2 class="mb-4">Создание</h2>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Название ингридиента</label>
                <input type="text" name="title" class="form-control" id="Name" placeholder="Название">
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
@endsection
