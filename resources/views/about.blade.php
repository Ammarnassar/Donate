@extends('layouts.app')

@section('main')

    @include('layouts.page-title' , ['pageRoute' => 'blog.show' , 'currentPageName' => 'About' , 'previousPageName' => '' , 'previousPageRoute' => '' , 'background' => ''])

    <!-- Start About Area -->
    <section class="about-area abouts-areas ptb-100 two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/abouts-2.jpg" alt="About">
                        <div class="videos-wraps">
                            <div class="video-wrap">
                                <a href="play-video" class="video-btn"  data-ilb2-video='{"controls":"controls", "autoplay":false, "sources":[{"src":"assets/img/charity.mp4", "type":"video/mp4"}]}' data-imagelightbox="video">
                                    <i class="flaticon-play-button"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <span>About Us</span>
                        <h2>A Dream in their Mind is Our Mission</h2>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy.</p>
                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi ullam quibusdam, maiores a explicabo magnam dolor? Architecto velit, assumenda dolore consectetur adipisicing elit explicabo magnam dolor? Architecto velit, assumenda dolore magnam dolor? Architecto Lorem ipsum, dolor sit amet consectetur Architecto</p>
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
                <h2>Some Good Causes</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                <a class="default-btn" href="#">Donate Now</a>
                <a class="default-btn join" href="#">Join Now</a>
            </div>
        </div>
        <div class="container">
            <div class="counter-wrap">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-conuter">
                            <span class="odometer" data-count="2500">00</span>
                            <p>Since</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-conuter">
                            <span class="odometer" data-count="2005">00</span>
                            <p>Projects</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-conuter">
                            <span class="odometer" data-count="3004">00</span>
                            <p>Volunteers</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-conuter">
                            <span class="odometer" data-count="2004">00</span>
                            <p>Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Help Area -->

    <!-- Start Get Started Today Area -->
    <section class="get-started-today-area pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="get-started-img">
                        <img src="assets/img/get-started/get-started.png" alt="Donation">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="get-started-title">
                        <span>Get Started Today</span>
                        <h2>Our Fundraise Plans</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="get-started-list">
                        <img src="assets/img/get-started/1.png" alt="Started">
                        <h3>Education For Children</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                    <div class="get-started-list">
                        <img src="assets/img/get-started/2.png" alt="Started">
                        <h3>Home For Homeless People</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                    <div class="get-started-list">
                        <img src="assets/img/get-started/3.png" alt="Started">
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

    <!-- Start Organaization Area -->
    <section class="organaization-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="organaization-text">
                        <h2>Small Growing charity organaization wants to raise money</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis  suspendisse  gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simple dummy text of the printing and typesetting industry.</p>
                        <a class="default-btn" href="#">
                            How Donate
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="organaization">
                        <img src="assets/img/organaization-2.jpg" alt="Organaization">
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
                <span>Team</span>
                <h2>Our Volunteers</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-team">
                        <img src="assets/img/team/1.jpg" alt="Team">
                        <div class="team-text">
                            <h3>Jeniya Jemmy</h3>
                            <p>Reporter</p>
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
                        <img src="assets/img/team/2.jpg" alt="Team">
                        <div class="team-text">
                            <h3>Debit Denish</h3>
                            <p>Photographer</p>
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
                <div class="col-lg-4 col-sm-6 col-md-6 offset-sm-3 offset-lg-0">
                    <div class="single-team">
                        <img src="assets/img/team/3.jpg" alt="Team">
                        <div class="team-text">
                            <h3>Alen Jems</h3>
                            <p>Engineer</p>
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

