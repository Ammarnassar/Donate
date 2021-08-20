<div class="col-lg-4 col-md-12">
<aside class="widget-area" id="secondary">
    <section class="widget widget_zovio_posts_thumb">
        <h3 class="widget-title">{{__('Latest Posts')}}</h3>

        @forelse($latest_posts as $post)
            <article class="item">
                <a href="#" class="thumb">
                    <img class="fullimage cover bg1" src="{{$post->image}}" role="img">
                </a>
                <div class="info">
                    <time datetime="2019-06-30">{{$post->created_at->toFormattedDateString()}}</time>
                    <h4 class="title usmall">
                        <a href="{{route('blog.show' , $post)}}">{{$post->title}}</a>
                    </h4>
                </div>

                <div class="clear"></div>
            </article>
        @empty

        @endforelse

    </section>

    <section class="widget widget_categories">
        <h3 class="widget-title">{{__('Case Categories')}}</h3>

        <ul>
            <li><a href="#">Education (10)</a></li>
            <li><a href="#">Sports (10)</a></li>
            <li><a href="#">Megazine (12)</a></li>
            <li><a href="#">Health (16)</a></li>
        </ul>
    </section>

</aside>
</div>
