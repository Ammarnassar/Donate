<div class="single-campaing" >
    <div class="campaing-img">
        <img src="{{asset($image)}}" alt="">
    </div>
    <div class="campaing-text" style="max-height: 22rem ; min-height: 22rem ">
        <div class="progress pink">
            <div class="progress-bar" style="width: {{($raised/$goal)*100}}%">
                <div class="progress-value" >10%</div>
            </div>
        </div>
        <ul>
            <li><span>{{__('Raised')}}:</span> {{$raised}}</li>
            <li class="left-site"><span>{{__('Goal')}}:</span> {{$goal}}</li>
        </ul>
        <h3>{{$title}}</h3>
        <p>{{substr($description , 0 , 60)}}</p>
        <a class="read-more" href="">{{__('Read More')}}</a>
    </div>
</div>
