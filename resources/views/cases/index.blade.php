@extends('layouts.app')

@section('main')
    @include('layouts.page-title' , ['pageRoute' => 'case.all' , 'currentPageName' => 'Cases' , 'previousPageName' => '' , 'previousPageRoute' => '' , 'background' => '/temp/nivo/assets/img/page-banner/5.jpg'])

    <!-- Start Active Campaing Area -->
    <section class="active-campaing-area two">
        <div class="container">
            <div class="section-title">
                <h2>{{__('Our Cases')}}</h2>
            </div>

            <div class="row">
                @forelse($causes as $case)
                <div class="col-12 col-md-4">
                    <x-case-card :case="$case" :image="$case->image" />
                </div>
                @empty
                    <div class="text-primary text-center">{{__('No Causes !')}}</div>
                @endforelse
            </div>
            <div class="pagenavigation-area">
                <nav aria-label="Page navigation example text-center">
                    {{$causes->links()}}
                </nav>
            </div>
        </div>
        <div class=" shape shape-1">
            <img src="{{asset('temp/nivo/assets/img/shape/1.png')}}" alt="Shape">
        </div>
    </section>
    <!-- End Active Campaing Area -->
@endsection
