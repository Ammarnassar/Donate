@extends('layouts.app')

@section('main')
    @include('layouts.page-title' , ['pageRoute' => 'case.all' , 'currentPageName' => 'Causes' , 'previousPageName' => '' , 'previousPageRoute' => '' , 'background' => '/temp/nivo/assets/img/page-banner/5.jpg'])

    <!-- Start Active Campaing Area -->
    <section class="active-campaing-area two">
        <div class="container">
            <div class="section-title">
                <h2>{{__('Our Causes')}}</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
            </div>

            <div class="row">
                @forelse($causes as $case)
                <div class="col-12 col-md-4">
                    <x-case-card :case="$case" image="temp/nivo/assets/img/campaing/2.jpg" />
                </div>
                @empty
                    <div class="text-primary text-center">No Causes !</div>
                @endforelse
            </div>

            <div class="text-center">{{ $causes->links() }}</div>
        </div>
        <div class=" shape shape-1">
            <img src="{{asset('temp/nivo/assets/img/shape/1.png')}}" alt="Shape">
        </div>
    </section>
    <!-- End Active Campaing Area -->
@endsection
