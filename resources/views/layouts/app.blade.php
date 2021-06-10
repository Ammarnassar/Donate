<!doctype html>
<html lang="en">

@include('layouts.head-links')

<body @if (App::getLocale()== 'ar') style="font-family: 'Tajawal', sans-serif !important;" @else
            style="font-family: 'Open Sans', sans-serif !important;"@endif>

{{--<!-- Start Preloader Area -->--}}
{{--<div class="preloader">--}}
{{--    <div class="spinner">--}}
{{--        <div class="double-bounce1"></div>--}}
{{--        <div class="double-bounce2"></div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- End Preloader Area -->--}}

<!-- Start Header Area -->
<div class="nivo-header-style-one fixed-top">
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="{{route('home')}}" class="logo">
                <img src="{{asset('temp/nivo/assets/img/nivo-logo.png')}}" alt="Nivo Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="nivo-nav-one">
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('temp/nivo/assets/img/nivo-logo.png')}}" alt="Nivo Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item ">
                                    <a href="{{route('home')}}" class="nav-link @if(Route::currentRouteName() === 'home') active @endif">{{__('Home')}}</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{route('about')}}" class="nav-link @if(Route::currentRouteName() == 'about') active @endif">{{__('About')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('causes.index')}}" class="nav-link @if(Route::currentRouteName() == 'causes.index') active @endif">{{__('Causes')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('blog.index')}}" class="nav-link @if(Route::currentRouteName() == 'blog.index') active @endif">{{__('Blog')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link @if(Route::currentRouteName() == 'contact') active @endif">{{__('Contact')}}</a>
                                </li>
                            </ul>
                            <div class="others-option">
                                <div class="others-options">
                                    <div class="option-item " >
                                        <i class="search-btn fa fa-globe" style="font-size: 14px"><span style="font-family: 'Tajawal', sans-serif;" class="mx-1">{{__('Language')}}</span></i>
                                        <i class="close-btn fa fa-close" style="font-size: 14px" ><span style="font-family: 'Tajawal', sans-serif;" class="mx-1">{{__('Language')}}</span></i>

                                        <div class="search-overlay search-popup" >
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <a style="@if ($loop->last) margin-top: 15px; @endif color: #e22b64"   rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <a href="donate.html" class="donate">{{__('Donate Now')}}</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Header Area -->

<main id="main">
    @yield('main')
</main>

@include('layouts.footer')

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="fa fa-angle-double-up"></i>
    <i class="fa fa-angle-double-up"></i>
</div>
<!-- End Go Top Area -->

@include('layouts.script-links')

</body>

</html>
