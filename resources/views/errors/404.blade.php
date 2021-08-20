@extends('layouts.auth')

@section('main')

    <!-- Start 404 Error -->
    <div class="error-area pt-0">
        <div class="d-table">
            <div class="d-table-cell p-0">
                <div class="error-contant-wrap mt-0">
                    <img src="{{asset('temp/nivo/assets/img/404.jpg')}}" alt="404">
                    <h3>{{__('Oops! Page Not Found')}}</h3>
                    <p>{{__('The page you were looking for could not be found.')}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 Error -->

@endsection
