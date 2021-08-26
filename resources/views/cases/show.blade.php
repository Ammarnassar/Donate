@extends('layouts.app')

@section('main')
    @include('layouts.page-title' , ['pageRoute' => route('case.show' , $case->id) , 'currentPageName' => $case->title , 'previousPageName' => 'Cases' , 'previousPageRoute' => 'case.all' , 'background' => '/temp/nivo/assets/img/page-banner/5.jpg'])

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <div class="single-campaing two">
                                <div class="campaing-img">
                                    <img src="{{$case->image->url}}" alt="">
                                </div>
                                <div class="campaing-text">
                                    <div class="progress pink">
                                        <div class="progress-bar"
                                             style="width: {{($case->raised/$case->goal)*100}}%"></div>
                                    </div>
                                    <ul>
                                        <li><span>{{__('Raised')}}:</span> {{$case->raised}}  </li>
                                        <li class="left-site"><span>{{__('Goal')}}:</span> {{$case->goal}} {{__('JOD')}}
                                        </li>
                                    </ul>
                                    <h3>{{$case->title}}</h3>
                                    <p> {{$case->details}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-primary mt-5 mb-0 text-white p-3 h2 fw-bold text-center">
                            {{__('Donate To This Case')}}
                        </div>
                        <livewire:donate-card :case="$case"/>

                        @component('components.share-content') @endcomponent
                    </div>
                </div>

                @component('components.aside-card' , ['latest_posts' => $latest_posts]) @endcomponent

            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection
