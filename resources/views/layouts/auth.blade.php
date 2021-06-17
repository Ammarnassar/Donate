<!doctype html>
<html lang="en">

@include('layouts.head-links')

<body @if (App::getLocale()== 'ar') style="font-family: 'Tajawal', sans-serif !important;" @else
style="font-family: 'Open Sans', sans-serif !important;"@endif>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <img width="150" height="150" src="{{asset('temp/nivo/assets/img/nivo-logo.png')}}" alt="Nivo Logo">
            </div>
        </div>
        @yield('main')
    </div>
    <div class="text-center mt-4">
        <a href="{{route('home')}}" class="fs-5" style="color: #e22b64">
            {{__('Back To Home')}}
            <i class="fa @if (App::getLocale()== 'ar') fa-arrow-left @else fa-arrow-right @endif " ></i>
        </a>
    </div>
</section>


@include('layouts.script-links')

</body>
</html>

