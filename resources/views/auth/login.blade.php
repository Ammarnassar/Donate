@extends('layouts.auth')

@section('main')

    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class=" d-md-flex justify-content-center">
                <div class="login-wrap shadow p-4 p-lg-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">{{__('Login')}}</h3>
                        </div>
                    </div>
                    <form action="{{route('login')}}" method="post" class="signin-form">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="label" for="name">{{__('Email')}}</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('Email')}}" name="email" value="{{old('email')}}">

                            @error('email')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                            @enderror

                        </div>
                        <div class="form-group mb-3">
                            <label class="label" for="password">{{__('Password')}}</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{__('Password')}}" name="password">

                            @error('password')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">{{__('Login')}}</button>
                        </div>
                        <div class="form-group d-md-flex justify-content-between">
                            <div class="">
                                <a href="#">{{__('Forgot Password ?')}} </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
