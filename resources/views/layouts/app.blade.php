<!doctype html>
<html lang="en">

@include('layouts.head-links')

<body>
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

                        <div class="collapse navbar-collapse mean-menu align-items-center" id="navbarSupportedContent">
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
                                <li class="nav-item d-inline-block d-md-none">
                                    <div class="d-flex align-items-center justify-content-center">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <a style="@if ($loop->last) margin-top: 15px; @endif color: #e22b64" class="text-center"  rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>
                            <div class="others-option">
                                <div class="others-options">
                                    <div class="option-item " >
                                        <i class="search-btn fa fa-globe" style="font-size: 14px"><span style="font-family: 'Tajawal', sans-serif;" class="mx-1">{{__('Language')}}</span></i>
                                        <i class="close-btn fa fa-close" style="font-size: 14px" ><span style="font-family: 'Tajawal', sans-serif;" class="mx-1">{{__('Language')}}</span></i>

                                        <div class="search-overlay search-popup" >
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <a style="@if ($loop->last) margin-top: 15px; @endif color: #e22b64; "   rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('donate')}}" class="donate">{{__('Donate Now')}}</a>
                            </div>
                            @auth
                            <div class="mx-4 d-none d-md-inline-block dropdown">
                                <span> {{substr(auth()->user()->name , 0 , 7)}} </span>
                                <img src="{{asset('/temp/nivo/assets/img/user_avatar.png')}}" class="rounded-circle border border-3" style="width: 50px" alt="" type="button" id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                <ul class="dropdown-menu py-2 text-center" aria-labelledby="dropdownMenu">
                                    <li><a class="dropdown-item" style="font-size: 13px" href="#">
                                         {{__('Profile')}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('logout')}}" class="dropdown-item" style="font-size: 13px" href="#">
                                            {{__('Logout')}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            @endauth
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Header Area -->

<main id="main" class="">
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
