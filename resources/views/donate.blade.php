@extends('layouts.app')

@section('main')

    @include('layouts.page-title' , ['pageRoute' => 'donate' , 'currentPageName' => 'Donate Now' , 'previousPageName' => '' , 'previousPageRoute' => '' , 'background' => '/temp/nivo/assets/img/page-banner/1.jpg'])

    <!--  Start Project Area -->
    <section class="donate-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="donate-img"></div>
                </div>
                <div class="col-lg-6">
                    <div class="donates-wraps">
                        <div class="payment-method">
                            <h3>Select Payment Method</h3>
                            <p>
                                <input type="radio" id="paypal" name="radio-group">
                                <label for="paypal">PayPal</label>
                            </p>
                            <p>
                                <input type="radio" id="credit" name="radio-group">
                                <label for="credit">Credit Card</label>
                            </p>
                            <p>
                                <input type="radio" id="debit" name="radio-group">
                                <label for="debit">Debit Card</label>
                            </p>
                            <p>
                                <input type="radio" id="others" name="radio-group">
                                <label for="others">others</label>
                            </p>
                        </div>
                        <div class="contact-form">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="name" id="first-name" class="form-control" required data-error="Please enter your name" placeholder="First Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="name" id="last-name" class="form-control" required data-error="Please enter your name" placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="$100.00">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="default-btn">{{__('Donate Now')}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  End Project Area -->

@endsection
