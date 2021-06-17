@extends('layouts.auth')

@section('main')

    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
                <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                    <div class="text w-100">
                        <h2>{{__('Welcome')}} !</h2>
                        <p>{{__('Don\'t have an account ?')}} </p>
                        <a href="{{route('register')}}" class="btn btn-white btn-outline-white">{{__('Register Now')}} </a>
                    </div>
                </div>
                <div class="login-wrap p-4 p-lg-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">{{__('Login')}}</h3>
                        </div>
                        <div class="w-100">
                            <p class="social-media d-flex justify-content-end">
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                            </p>
                        </div>
                    </div>
                    <form action="#" class="signin-form">
                        <div class="form-group mb-3">
                            <label class="label" for="name">{{__('Email')}}</label>
                            <input type="text" class="form-control" placeholder="{{__('Email')}}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="label" for="password">{{__('Password')}}</label>
                            <input type="password" class="form-control" placeholder="{{__('Password')}}" required>
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
