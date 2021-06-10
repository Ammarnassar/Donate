@extends('layouts.app')

@section('main')
    @include('layouts.page-title' , ['pageRoute' => 'blog.index' , 'currentPageName' => 'Blog' , 'previousPageName' => '' , 'previousPageRoute' => '' , 'background' => ''])

    <!-- Start Latest News Area -->
    <section class="blog-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="news-img">
                            <a href="{{route('blog.show')}}">
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
                                <a href="blog-details.html">Highlight some of the fundraising</a>
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
                            <a href="{{route('blog.show')}}">
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
                                <a href="blog-details.html">Highlight some of the fundraising</a>
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
                            <a href="{{route('blog.show')}}">
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
                                <a href="blog-details.html">Highlight some of the fundraising</a>
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
                            <a href="{{route('blog.show')}}">
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
                                <a href="blog-details.html">Highlight some of the fundraising</a>
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
                            <a href="{{route('blog.show')}}">
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
                                <a href="blog-details.html">Highlight some of the fundraising</a>
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
                            <a href="{{route('blog.show')}}">
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
                                <a href="blog-details.html">Highlight some of the fundraising</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur eiussi adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            <a class="read-more" href="blog-details.html">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="pagenavigation-area">
                    <nav aria-label="Page navigation example text-center">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link page-links" href="#">
                                    <i class="fa fa-angle-double-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fa fa-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Area -->
@endsection
