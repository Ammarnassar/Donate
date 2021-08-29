@extends('layouts.app')

@section('main')

    @include('layouts.page-title' , ['pageRoute' => 'contact' , 'currentPageName' => 'Contact' , 'previousPageName' => '' , 'previousPageRoute' => '' , 'background' => ''])

    <!-- Start Contact Box Area -->
    <section class="contact-box ptb-100-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box">
                        <i class="fa fa-map-marker"></i>
                        <div class="contect-title">
                            <h3>{{__('Address')}}</h3>
                            <p>{{__('Amman , Jordan')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box">
                        <i class="fa fa-envelope"></i>
                        <div class="contect-title">
                            <h3>{{__('Email')}}</h3>
                            <a href="mailto:hello@nivo.com">info@doante.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-contact-box">
                        <i class="fa fa-phone"></i>
                        <div class="contect-title">
                            <h3>{{__('Phone')}}</h3>
                            <a href="tel:+44-587-154756">+962788838370</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Box Area -->

    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <h2>{{__('Drop us your case details')}}</h2>
                <p>{{__('we will share your case in our website')}}</p>
            </div>

            <div class="row align-items-center">
                <div class="contact-form">
                    <form method="post" action="{{route('contact.case')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="{{__('Your Name')}}">
                                    @error('name')
                                    <div class="text-danger text-right text-sm">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group my-3">
                                    <input type="email" name="email" id="email" class="form-control"
                                           placeholder="{{__('Your Email')}}">

                                    @error('email')
                                    <div class="text-danger text-right text-sm">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group my-3">
                                    <input type="text" name="phone" id="phone" class="form-control"
                                           placeholder="{{__('Your Phone')}}">

                                    @error('phone')
                                    <div class="text-danger text-right text-sm">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <textarea name="case_details" class="form-control" id="case_details" cols="30"
                                              rows="8" placeholder="{{__('Your Case Details')}}"></textarea>

                                    @error('case_details')
                                    <div class="text-danger text-right text-sm">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    {{__('Send')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

@endsection
