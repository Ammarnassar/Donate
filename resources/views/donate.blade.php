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
                    <livewire:donate-card/>
                </div>
            </div>
        </div>
    </section>
    <!--  End Project Area -->

@endsection
