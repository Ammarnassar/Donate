<div class="col-lg-4 col-md-6">
    <div class="single-news" >
        <div class="news-img">
            <a href="">
                <img src="{{$post->image->url}}" class="img-fluid" alt="News">
            </a>
            <div class="date" >
                <span>{{$post->created_at->toFormattedDateString()}}</span>
            </div>
        </div>
        <div class="news-text" style="height: 400px">
            <ul>
                <li>
                    <i class="flaticon-man-user"></i>
                    {{__('Posted By')}}
                    <a class="text-fuchsia">{{__('Admin')}}</a>
                </li>
            </ul>
            <h3>
                <a href="{{route('blog.show' , $post)}}">{{$post->title}}</a>
            </h3>
            <p> {{substr($post->body , 0 , 50)}}</p>
            <a class="read-more" href="{{route('blog.show' , $post)}}">
                {{__('Read More')}}
            </a>
        </div>
    </div>
</div>
