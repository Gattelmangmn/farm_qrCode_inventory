@extends('layouts.global')
@section('content')
    <div class="container-fluid h-custom p-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-6 my-lg-5 py-lg-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-5 offset-xl-1 my-lg-5 py-lg-5">
                @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('error')}}
                    </div>
                @endif
                <form action="{{route('login')}}" method="Post">
                    @csrf
                    <!-- Email input -->
                    <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                        <input type="email" name="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address">
                        <label class="form-label" for="form3Example3" style="margin-left: 0px;">Email address</label>
                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>

                    <!-- Password input -->
                    <div data-mdb-input-init="" class="form-outline mb-3" data-mdb-input-initialized="true">
                        <input type="password" name="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password">
                        <label class="form-label" for="form3Example4" style="margin-left: 0px;">Password</label>
                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64px;"></div><div class="form-notch-trailing"></div></div></div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" data-mdb-button-init="" data-mdb-ripple-init="" class="btn btn-primary btn-lg" data-mdb-button-initialized="true">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
