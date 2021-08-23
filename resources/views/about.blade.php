@extends('layouts.app')

@section('main')

    @include('layouts.page-title' , ['pageRoute' => 'blog.show' , 'currentPageName' => 'About' , 'previousPageName' => '' , 'previousPageRoute' => '' , 'background' => ''])

    <!-- Start About Area -->
    <section class="about-area abouts-areas ptb-100 two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('temp/nivo/assets/img/abouts-2.jpg')}}" alt="About">
                        <div class="videos-wraps">
                            <div class="video-wrap">
                                <a href="play-video" class="video-btn"  data-ilb2-video='{"controls":"controls", "autoplay":false, "sources":[{"src":"temp/nivo/assets/img/charity.mp4", "type":"video/mp4"}]}' data-imagelightbox="video">
                                    <i class="flaticon-play-button"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <span>{{__('About Us')}}</span>
                        <h2>{{__('A Dream in their Mind is Our Mission')}}</h2>
                        <p class="mb-3"> {{__('Our mission is to provide this platform for everyone who needs it to publish their status for free and without revealing their identity if they want, so that this platform enables them to reach the largest number of donors, contributors and those who love charity and cooperation.')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Help Area -->
    <section class="help-area two">
        <div class="container">
            <div class="help-title">
                <h2>{{__('Some Of Our Numbers')}}</h2>
                <a class="default-btn" href="#">{{__('Donate Now')}}</a>
            </div>
        </div>
        <div class="container">
            <div class="counter-wrap">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 col-md-4">
                        <div class="single-conuter" dir="ltr">
                            <span class="odometer" data-count="{{$donationsCount}}">{{$donationsCount}}</span>
                            <p>{{__('Donations')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-4">
                        <div class="single-conuter" dir="ltr">
                            <span class="odometer" data-count="{{$causesCount}}">{{$causesCount}}</span>
                            <p>{{__('Cases')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-4">
                        <div class="single-conuter" dir="ltr">
                            <span class="odometer"  data-count="50">50</span>
                            <p>{{__('Help')}}</p>
                        </div>
                    </div>
                </div>
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
                </div>
            </div>
        </div>
    </section>
    <!-- End Get Started Today Area -->

    <!-- Start Organaization Area -->
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
    <!-- End Organaization Area -->

    <!-- Start Our Team Area -->
    <section class="our-team-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{__('Our Volunteers')}}</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-team">
                        <img src="{{asset('temp/nivo/assets/img/team/1.jpg')}}" alt="Team">
                        <div class="team-text">
                            <h3>Hebah Al-Jamal</h3>
                            <p>Manager</p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-team">
                        <img src="{{asset('temp/nivo/assets/img/team/2.jpg')}}" alt="Team">
                        <div class="team-text">
                            <h3>Huda Al-Jamal</h3>
                            <p>Manager</p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team Area -->

@endsection

