<div class="single-campaing">
    <div class="campaing-img">
        <img src="{{asset($image)}}" alt="">
    </div>
    <div class="campaing-text">
        <div class="progress pink">
            <div class="progress-bar">
                <div class="progress-value" style="width: 50%;">50%</div>
            </div>
        </div>
        <ul>
            <li><span>{{__('Raised')}}:</span> {{$raised}}</li>
            <li class="left-site"><span>{{__('Goal')}}:</span> {{$goal}}</li>
        </ul>
        <h3>{{$title}}</h3>
        <p>{{$description}}</p>
        <a class="read-more" href="">{{__('Read More')}}</a>
    </div>
</div>
