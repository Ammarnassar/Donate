@extends('layouts.dashboard')

@section('title' ,'Dashboard')

@section('main')

    <section class="content ">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$causesCount}}</h3>

                                <p>{{__('Cases')}}</p>
                            </div>
                            <div class="icon" >
                                <i class="fas fa-list" @if(App::getLocale() == 'ar') style="right: 235px !important;" @endif></i>
                            </div>
                            <a href="{{route('admin.request.index')}}" class="small-box-footer">{{__('More info')}} <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$postsCount}}</h3>

                                <p>{{__('Posts')}}</p>
                            </div>
                            <div class="icon" >
                                <i class="ion ion-stats-bars" @if(App::getLocale() == 'ar') style="right: 235px !important;" @endif></i>
                            </div>
                            <a href="{{route('admin.post.index')}}" class="small-box-footer">{{__('More info')}} <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{$donationsCount}}</h3>

                                <p>{{__('Donations')}}</p>
                            </div>
                            <div class="icon" >
                                <i class="ion ion-person-add" @if(App::getLocale() == 'ar') style="right: 235px !important;" @endif></i>
                            </div>
                            <a href="{{route('admin.donations.index')}}" class="small-box-footer">{{__('More info')}} <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$adminsCount}}</h3>

                                <p>{{__('Admins')}}</p>
                            </div>
                            <div class="icon" >
                                <i class="ion ion-pie-graph" @if(App::getLocale() == 'ar') style="right: 235px !important;" @endif></i>
                            </div>
                            <a href="{{route('admin.admin.index')}}" class="small-box-footer">{{__('More info')}} <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

@endsection
