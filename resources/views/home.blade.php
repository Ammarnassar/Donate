@extends('layouts.app')

@section('main')
    <!-- Start Banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="banner-wrap">
                <div class="row align-items-center m-0">
                    <div class="col-lg-6 p-0">
                        <div class="banner-text">
                            <h1>{{__('We Encourage Participating in Charity!')}}</h1>
                            <p>{{__('Engaging in a charity can give you a good feeling! Your contribution can make you more complete. Millions of children need your support.')}}</p>
                            <a class="default-btn" href="{{route('case.all')}}">{{__('Donate Now')}}</a>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="banner-img">
                            <img src="{{asset('temp/nivo/assets/img/banner-img.png')}}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" shape shape-1">
            <img src="{{asset('temp/nivo/assets/img/shape/1.png')}}" alt="Shape">
        </div>
        <div class=" shape shape-2">
            <img src="{{asset('temp/nivo/assets/img/shape/2.png')}}" alt="Shape">
        </div>
        <div class=" shape shape-3">
            <img src="{{asset('temp/nivo/assets/img/shape/3.png')}}" alt="Shape">
        </div>
        <div class=" shape shape-4">
            <img src="{{asset('temp/nivo/assets/img/shape/4.png')}}" alt="Shape">
        </div>
        <div class=" shape shape-5">
            <img src="{{asset('temp/nivo/assets/img/shape/5.png')}}" alt="Shape">
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- Start Good Causes Area -->
    <section class="good-causes-area ptb-100-70">
        <div class="container">
            <div class="section-title">
                <h2>{{__('Help the Poor Through Us')}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-good-causes">
                        <i class="flaticon-gift"></i>
                        <h3>{{__('Surprised Box')}}</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-good-causes">
                        <i class="flaticon-customer"></i>
                        <h3>{{__('Helping Hand')}}</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-good-causes">
                        <i class="flaticon-coin"></i>
                        <h3>{{__('Aid For Children')}}</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-good-causes">
                        <i class="flaticon-family"></i>
                        <h3>{{__('Spread Love')}}</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-good-causes">
                        <i class="flaticon-harvest"></i>
                        <h3>{{__('Food Camp')}}</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-good-causes">
                        <i class="flaticon-smile"></i>
                        <h3>{{__('Smile Session')}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class=" shape shape-1">
            <img src="{{asset('temp/nivo/assets/img/shape/1.png')}}" alt="Shape">
        </div>
        <div class=" shape shape-2">
            <img src="{{asset('temp/nivo/assets/img/shape/2.png')}}" alt="Shape">
        </div>
        <div class=" shape shape-3">
            <img src="{{asset('temp/nivo/assets/img/shape/3.png')}}" alt="Shape">
        </div>
        <div class=" shape shape-5">
            <img src="{{asset('temp/nivo/assets/img/shape/5.png')}}" alt="Shape">
        </div>
    </section>
    <!-- End Good Causes Area -->

    <!-- Start About Area -->
    <section class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('temp/nivo/assets/img/about-img.jpg')}}" alt="About">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text ptb-100">
                        <h2>{{__('A Dream in their Mind is Our Mission')}}</h2>
                        <ul>
                            <li>
                                <i class="flaticon-check-mark " style="clear: right"></i>
                                {{__('Become Volunteer')}}
                            </li>
                            <li>
                                <i class="flaticon-check-mark" style="clear: right"></i>
                                {{__('Quick Fundraise')}}
                            </li>
                            <li>
                                <i class="flaticon-check-mark" style="clear: right"></i>
                                {{__('Give Donation')}}
                            </li>
                            <li>
                                <i class="flaticon-check-mark" style="clear: right"></i>
                                {{__('Join Event')}}
                            </li>
                        </ul>
                        <a class="default-btn" href="{{route('about')}}">{{__('More Details')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Active Campaign Area -->
    <section class="active-campaing-area pt-100">
        <div class="container">
            <div class="section-title">
                <h2>{{__('Latest Cases')}}</h2>
            </div>
            <div class="campaing-wrap owl-carousel owl-theme text-center ">
                @forelse($cases as $case)
                <x-case-card :case="$case" image="temp/nivo/assets/img/campaing/2.jpg"/>

                @empty
                    <div class="d-flex align-items-center justify-content-center text-center  ">
                        {{__('No Cases !')}}
                    </div>
                @endforelse

            </div>
        </div>
        <div class=" shape shape-1">
            <img src="{{asset('temp/nivo/assets/img/shape/1.png')}}" alt="Shape">
        </div>
    </section>
    <!-- End Active Campaign Area -->

    <!-- Start Help Area -->
    <section class="help-area">
        <div class="container">
            <div class="help-title">
                <h2>{{__('Small Actions Lead To Big changes')}}</h2>
                <a class="default-btn" href="{{route('case.all')}}">{{__('Donate Now')}}</a>
            </div>
        </div>
    </section>
    <!-- End Help Area -->

    <!-- Start Get Started Today Area -->
    <section class="get-started-today-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="get-started-img">
                        <img src="{{asset('temp/nivo/assets/img/get-started/get-started.png')}}" alt="Donation">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="get-started-title">
                        <h2>{{__('Our Fundraise Plans')}}</h2>
                    </div>
                    <div class="get-started-list ">
                        <img src="{{asset('temp/nivo/assets/img/get-started/1.png')}}" alt="Started">
                        <h3 class="text-dark">{{__('Education For Children')}}</h3>
                    </div>
                    <div class="get-started-list">
                        <img src="{{asset('temp/nivo/assets/img/get-started/2.png')}}" alt="Started">
                        <h3 class="text-dark">{{__('Home For Homeless People')}}</h3>
                    </div>
                    <div class="get-started-list">
                        <img src="{{asset('temp/nivo/assets/img/get-started/3.png')}}" alt="Started">
                        <h3 class="text-dark">{{__('Free Medical Services')}}</h3>
                    </div>
                    <a class="default-btn" href="{{route('about')}}">
                        {{__('Learn More')}}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Get Started Today Area -->

    <!-- Start Organization Area -->
    <section class="organaization-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="organaization-text">
                        <h2>{{__('Small Growing charity organaization wants to raise money')}}</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="organaization">
                        <img src="{{asset('temp/nivo/assets/img/organaization.png')}}" alt="Organaization">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Organization Area -->

{{--    <!-- Start Testimonial Area -->--}}
{{--    <section class="testimonial-area">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title">--}}
{{--                <h2>{{__('Their Thoughts  About Our Work')}}</h2>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="testimonial-wrap owl-carousel owl-theme">--}}
{{--                    <div class="single-testimonial">--}}
{{--                        <img src="{{asset('temp/nivo/assets/img/testimonial/1.jpg')}}" alt="Testimonial">--}}
{{--                        <h3>James Thomas</h3>--}}
{{--                        <i class="flaticon-left-quote"></i>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectet adipiscing  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum </p>--}}
{{--                    </div>--}}
{{--                    <div class="single-testimonial">--}}
{{--                        <img src="{{asset('temp/nivo/assets/img/testimonial/2.jpg')}}" alt="Testimonial">--}}
{{--                        <h3>Thomas Juhon</h3>--}}
{{--                        <i class="flaticon-left-quote"></i>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectet adipiscing  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum </p>--}}
{{--                    </div>--}}
{{--                    <div class="single-testimonial">--}}
{{--                        <img src="{{asset('temp/nivo/assets/img/testimonial/3.jpg')}}" alt="Testimonial">--}}
{{--                        <h3>James Thomas</h3>--}}
{{--                        <i class="flaticon-left-quote"></i>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectet adipiscing  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="shape shape-8">--}}
{{--            <img src="{{asset('temp/nivo/assets/img/shape/8.png')}}" alt="Shape">--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Testimonial Area -->--}}

    <!-- Start Latest News Area -->
    <section class="latest-news-area">
        <div class="container">
            <div class="section-title">
                <h2>{{__('Latest Posts')}}</h2>
            </div>
            <div class="row">
                @forelse($latest_posts->take(3) as $post)
                <x-post-card :post="$post" />
                @empty
                    <div class="text-center">
                        {{__('No Posts !')}}
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- End Latest News Area -->
@endsection
