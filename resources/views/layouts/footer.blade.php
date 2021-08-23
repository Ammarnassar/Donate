<!-- Start Footer Top Area -->
<section class="footer-top-area ptb-100-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-widget">
                    <a href="index.html">
                        <img src="{{asset('temp/nivo/assets/img/favicon.png')}}" alt="">
                        <span class="text-white h4">{{__('Donate To Care')}}</span>
                    </a>
                    <p>{{__('Donate is a platform for collect money !')}}</p>
                    <ul class="social-icon">
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
            <div class="col-lg-2 col-sm-6 col-md-6">
                <div class="single-widget">
                    <h3>{{__('Case Categories')}}</h3>
                    <ul>
                        @foreach($categories as $category)
                        <li>
                            <a href="#">{{$category->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-md-6">
                <div class="single-widget">
                    <h3>{{__('Pages')}}</h3>
                    <ul>
                        <li>
                            <a href="{{route('case.all')}}">{{__('Cases')}}</a>
                        </li>
                        <li>
                            <a href="{{route('blog.index')}}">{{__('Blog')}}</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">{{__('About')}}</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">{{__('Contact')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-widget">
                    <h3>{{__('Address')}}</h3>
                    <ul class="address">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            {{__('Amman , Jordan')}}
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:hello@nivo.com">info@donate.com</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <a href="tel:+962789611469">+962788838370</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer Top Area -->

<!-- Start Footer Bottom Area -->
<footer class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div>
                    <p>
                        {{__('Copyright')}} <i class="fa fa-copyright"></i> 2021 Donate App .
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <ul class="terms-conditions">
                    <li><a href="#">{{__('Terms & Conditions')}}</a></li>
                    <li><a href="#">{{__('Privacy Policy')}}</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Bottom Area -->
