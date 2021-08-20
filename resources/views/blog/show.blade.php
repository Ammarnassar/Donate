@extends('layouts.app')

@section('main')

    @include('layouts.page-title' , ['pageRoute' => route('blog.show' , $post) , 'currentPageName' => $post->title , 'previousPageName' => 'Blog' , 'previousPageRoute' => 'blog.index' , 'background' => ''])

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="{{$post->image->url}}" alt="image" >
                        </div>

                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><span>{{__('Posted On')}}:</span> <a href="#">{{$post->created_at->toFormattedDateString()}}</a></li>
                                    <li><span>{{__('Posted By')}}:</span> <a href="#">Admin</a></li>
                                </ul>
                            </div>

                            <h3>{{$post->title}}</h3>

                            <p>{{$post->body}}</p>

                        </div>

                        @component('components.share-content') @endcomponent

                    </div>
                </div>

                @component('components.aside-card' , ['latest_posts' => $latest_posts]) @endcomponent

            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->

@endsection
