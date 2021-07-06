@extends('layouts.auth')

@section('main')

    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
                <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                    <div class="text w-100">
                        <h2>{{__('Register now and be the reason for someone\'s happiness !')}} </h2>
                        <p>{{__('Already have account ?')}}</p>
                        <a href="{{route('login')}}" class="btn btn-white btn-outline-white">{{__('Login')}}</a>
                    </div>

                </div>
                <div class="login-wrap p-4 p-lg-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">{{__('Register')}}</h3>
                        </div>
                    </div>
                    <form action="{{route('register')}}" method="post" class="signin-form">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="label" for="name">{{__('Name')}}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{__('Name')}}" name="name" value="{{old('name')}}">
                            @error('name')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="label" for="name">{{__('Email')}}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{__('Email')}}" name="email" value="{{old('email')}}">
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
                        <div class="form-group mb-3">
                            <label class="label" for="password">{{__('Password Confirmation')}}</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{__('Password Confirmation')}}" name="password_confirmation">

                            @error('password')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">{{__('Register')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
