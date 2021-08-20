<div class="single-campaing" >
    <div class="campaing-img">
        <img src="{{asset($image)}}" alt="">
    </div>
    <div class="campaing-text" style="max-height: 22rem ; min-height: 22rem ">
        <div class="progress pink">
            <div class="progress-bar" style="width: {{($case->raised/$case->goal)*100}}%">
                <div class="progress-value" >10%</div>
            </div>
        </div>
        <ul>
            <li><span>{{__('Raised')}}:</span> {{$case->raised}}</li>
            <li class="left-site"><span>{{__('Goal')}}:</span> {{$case->goal}}</li>
        </ul>
        <h3><a href="{{route('case.show' , $case->id)}}">{{$case->title}}</a></h3>
        <p>{{substr($case->details , 0 , 60)}}</p>
        <a class="read-more" href="">{{__('Read More')}}</a>
    </div>
</div>
