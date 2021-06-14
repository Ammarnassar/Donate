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
                            <a class="default-btn" href="#">{{__('Join with us')}}</a>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-good-causes">
                        <i class="flaticon-gift"></i>
                        <h3>Surprised Box</h3>
                        <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod  incididunt labore  dolore consectetur amet adipiscing elit.</p>
                        <a class="read-more" href="causes-details.html">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-good-causes">
                        <i class="flaticon-customer"></i>
                        <h3>Helping Hand</h3>
                        <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod  incididunt labore  dolore consectetur amet adipiscing elit.</p>
                        <a class="read-more" href="causes-details.html">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-good-causes">
                        <i class="flaticon-coin"></i>
                        <h3>Aid For Children</h3>
                        <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod  incididunt labore  dolore consectetur amet adipiscing elit.</p>
                        <a class="read-more" href="causes-details.html">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-good-causes">
                        <i class="flaticon-family"></i>
                        <h3>Helping Hand</h3>
                        <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod  incididunt labore  dolore consectetur amet adipiscing elit.</p>
                        <a class="read-more" href="causes-details.html">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-good-causes">
                        <i class="flaticon-harvest"></i>
                        <h3>Food Camp</h3>
                        <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod  incididunt labore  dolore consectetur amet adipiscing elit.</p>
                        <a class="read-more" href="causes-details.html">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-good-causes">
                        <i class="flaticon-smile"></i>
                        <h3>Smile Session</h3>
                        <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod  incididunt labore  dolore consectetur amet adipiscing elit.</p>
                        <a class="read-more" href="causes-details.html">
                            Read More
                        </a>
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
                        <span>About Us</span>
                        <h2>A Dream in their Mind is Our Mission</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply.</p>
                        <ul>
                            <li>
                                <i class="flaticon-check-mark"></i>
                                Become Volunteer
                            </li>
                            <li>
                                <i class="flaticon-check-mark"></i>
                                Quick  Fundraise
                            </li>
                            <li>
                                <i class="flaticon-check-mark"></i>
                                Give Donation
                            </li>
                            <li>
                                <i class="flaticon-check-mark"></i>
                                Join Event
                            </li>
                        </ul>
                        <a class="default-btn" href="about.html">More Details</a>
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
                <span>Active Campaign</span>
                <h2>Some Good Causes</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
            </div>
            <div class="campaing-wrap owl-carousel owl-theme">
                <x-case-card id="1" title="Ammar" description="Aldwayma" goal="2000" raised="500" image="temp/nivo/assets/img/campaing/2.jpg"/>
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
                <h2>Some Good Causes</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                <a class="default-btn" href="donate.html">Donate Now</a>
                <a class="default-btn join" href="#">Join Now</a>
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
                        <span>Get Started Today</span>
                        <h2>Our Fundraise Plans</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="get-started-list">
                        <img src="{{asset('temp/nivo/assets/img/get-started/1.png')}}" alt="Started">
                        <h3>Education For Children</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                    <div class="get-started-list">
                        <img src="{{asset('temp/nivo/assets/img/get-started/2.png')}}" alt="Started">
                        <h3>Home For Homeless People</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                    <div class="get-started-list">
                        <img src="{{asset('temp/nivo/assets/img/get-started/3.png')}}" alt="Started">
                        <h3>Free Medical Services</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                    <a class="default-btn" href="#">
                        Learn More
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
                        <h2>Small Growing charity organaization wants to raise money</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis  suspendisse  gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simple dummy text of the printing and typesetting industry.</p>
                        <a class="default-btn" href="donate.html">
                            How To Donate
                        </a>
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

    <!-- Start Testimonial Area -->
    <section class="testimonial-area">
        <div class="container">
            <div class="section-title">
                <span>Testimonial</span>
                <h2>Their Thoughts  About Our Work</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
            </div>
            <div class="row">
                <div class="testimonial-wrap owl-carousel owl-theme">
                    <div class="single-testimonial">
                        <img src="{{asset('temp/nivo/assets/img/testimonial/1.jpg')}}" alt="Testimonial">
                        <h3>James Thomas</h3>
                        <i class="flaticon-left-quote"></i>
                        <p>Lorem ipsum dolor sit amet, consectet adipiscing  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum </p>
                    </div>
                    <div class="single-testimonial">
                        <img src="{{asset('temp/nivo/assets/img/testimonial/2.jpg')}}" alt="Testimonial">
                        <h3>Thomas Juhon</h3>
                        <i class="flaticon-left-quote"></i>
                        <p>Lorem ipsum dolor sit amet, consectet adipiscing  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum </p>
                    </div>
                    <div class="single-testimonial">
                        <img src="{{asset('temp/nivo/assets/img/testimonial/3.jpg')}}" alt="Testimonial">
                        <h3>James Thomas</h3>
                        <i class="flaticon-left-quote"></i>
                        <p>Lorem ipsum dolor sit amet, consectet adipiscing  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape shape-8">
            <img src="{{asset('temp/nivo/assets/img/shape/8.png')}}" alt="Shape">
        </div>
    </section>
    <!-- End Testimonial Area -->

    <!-- Start Latest News Area -->
    <section class="latest-news-area">
        <div class="container">
            <div class="section-title">
                <span>Latest News</span>
                <h2>Some of The Recent Stories</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="news-img">
                            <a href="blog-details.html">
                                <img src="{{asset('temp/nivo/assets/img/news/1.jpg')}}" alt="News">
                            </a>
                            <div class="date">
                                <span>1 November</span>
                            </div>
                        </div>
                        <div class="news-text">
                            <ul>
                                <li>
                                    <i class="flaticon-man-user"></i>
                                    By
                                    <a href="#">Admin</a>
                                </li>
                                <li>
                                    <i class="flaticon-speech-bubbles-comment-option"></i>
                                    <a href="#">3 Comments</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">Highlight of the fundraisings</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur eiussi adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            <a class="read-more" href="blog-details.html">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="news-img">
                            <a href="blog-details.html">
                                <img src="{{asset('temp/nivo/assets/img/news/2.jpg')}}" alt="News">
                            </a>
                            <div class="date">
                                <span>2 November</span>
                            </div>
                        </div>
                        <div class="news-text">
                            <ul>
                                <li>
                                    <i class="flaticon-man-user"></i>
                                    By
                                    <a href="#">Admin</a>
                                </li>
                                <li>
                                    <i class="flaticon-speech-bubbles-comment-option"></i>
                                    <a href="#">3 Comments</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">
                                    A place start a new life with peace
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur eiussi adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            <a class="read-more" href="blog-details.html">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-news">
                        <div class="news-img">
                            <a href="blog-details.html">
                                <img src="{{asset('temp/nivo/assets/img/news/3.jpg')}}" alt="News">
                            </a>
                            <div class="date">
                                <span>3 November</span>
                            </div>
                        </div>
                        <div class="news-text">
                            <ul>
                                <li>
                                    <i class="flaticon-man-user"></i>
                                    By
                                    <a href="#">Admin</a>
                                </li>
                                <li>
                                    <i class="flaticon-speech-bubbles-comment-option"></i>
                                    <a href="#">3 Comments</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">Build a school for poor children</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur eiussi adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            <a class="read-more" href="blog-details.html">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Area -->
@endsection
