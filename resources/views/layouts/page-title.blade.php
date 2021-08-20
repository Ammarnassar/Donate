<!-- Start Page Title Area -->
<div class="page-title-area" style="background-image:url({{$background}})">
    <img src="" alt="">
    <div class="container">
        <div class="page-title-content">
            <h2>{{__($currentPageName)}}</h2>
            <ul>
                <li>
                    <a href="{{route('home')}}" >
                        {{__('Home')}}
                    </a>
                </li>
                @if($previousPageName)
                    @if (App::getLocale() == 'ar')
                        <i class="fa fa-chevron-left mx-2"></i>
                    @else
                        <i class="fa fa-chevron-right mx-2"></i>
                    @endif
                <li>
                    <a href="{{route($previousPageRoute)}}">
                        {{__($previousPageName)}}
                    </a>
                </li>
                @endif

                    @if (App::getLocale() == 'ar')
                        <i class="fa fa-chevron-left mx-2"></i>
                    @else
                        <i class="fa fa-chevron-right mx-2"></i>
                    @endif
                <li>
                    <a href="{{$pageRoute}}" @if(Route::currentRouteName() == $pageRoute) style="color: #fd3c65" @endif>
                        {{__($currentPageName)}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->
