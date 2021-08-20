@extends('layouts.app')

@section('main')
    @include('layouts.page-title' , ['pageRoute' => 'blog.index' , 'currentPageName' => 'Blog' , 'previousPageName' => '' , 'previousPageRoute' => '' , 'background' => ''])

    <!-- Start Latest News Area -->
    <section class="blog-area ptb-100">
        <div class="container">
            <div class="row">
                @forelse($posts as $post)
                @component('components.post-card' ,['post' => $post]) @endcomponent
                @empty
                    {{__('No Posts !')}}
                @endforelse
            </div>
            <div class="col-lg-12 ">

                <div class="pagenavigation-area">
                    <nav aria-label="Page navigation example text-center">
                        {{$posts->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Area -->
@endsection
