<div class="single-campaing single-news" >
    <div class="campaing-img news-img">
        <img src="{{asset($image)}}" alt="">
        <div class="date" >
            <span>{{ucfirst(__($case->category->title))}}</span>
        </div>
    </div>
    <div class="campaing-text" style="max-height: 22rem ; min-height: 22rem ">
        <div class="progress pink">
            <div class="progress-bar" style="width: {{($case->raised/$case->goal)*100}}%"></div>
        </div>
        <ul>
            <li><span style="color: #e22b64">{{__('Raised')}}:</span> {{$case->raised}} <sub>{{__('JOD')}}</sub></li>
            <li class="left-site" ><span style="color: #e22b64">{{__('Goal')}}:</span> {{$case->goal}} <sub>{{__('JOD')}}</sub> </li>
        </ul>
        <h3><a href="{{route('case.show' , $case->id)}}">{{$case->title}}</a></h3>
        <p>{{substr($case->details , 0 , 60)}}</p>
        <a class="read-more" href="{{route('case.show' , $case->id)}}">{{__('Read More')}}</a>
    </div>
</div>
