@extends('layouts.global')
@section('content')
    <section class="p-5 w-100">
        <div class="row">
            <div class="col-12">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center text-body h1 fw-bold mb-5 mt-4">Sign up</p>
                                @if(Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session::get('success')}}
                                    </div>
                                @endif

                                <form action="{{route('register')}}" method="Post">
                                    @csrf

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas text-body fa-user fa-lg me-3 fa-fw"></i>
                                        <div data-mdb-input-init="" class="form-outline flex-fill mb-0" data-mdb-input-initialized="true">
                                            <input type="text" id="form3Example1c" name="name" class="form-control">
                                            <label class="form-label" for="form3Example1c" style="margin-left: 0px;">Your Name</label>
                                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 71.2px;"></div><div class="form-notch-trailing"></div></div></div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas text-body fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div data-mdb-input-init="" class="form-outline flex-fill mb-0" data-mdb-input-initialized="true">
                                            <input type="email" name="email" id="form3Example3c" class="form-control">
                                            <label class="form-label" for="form3Example3c" style="margin-left: 0px;">Your Email</label>
                                            @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas text-body fa-lock fa-lg me-3 fa-fw"></i>
                                        <div data-mdb-input-init="" class="form-outline flex-fill mb-0" data-mdb-input-initialized="true">
                                            <input type="password" name="password" id="form3Example4c" class="form-control">
                                            <label class="form-label" for="form3Example4c" style="margin-left: 0px;">Password</label>
                                            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64.8px;"></div><div class="form-notch-trailing"></div></div></div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" data-mdb-button-init="" data-mdb-ripple-init="" class="btn btn-primary btn-lg" data-mdb-button-initialized="true">Register</button>
                                    </div>

                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img
                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                    class="img-fluid" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
