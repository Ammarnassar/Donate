@extends('layouts.dashboard')

@section('title' ,__('All Cases'))

@section('main')

    <div class="row justify-content-center">

        @livewire('index-item' ,[
        'name' => 'Requests' ,
        'columns' => ['Title'  , 'Status' , 'Raised' , 'Goal' ] ,
        ])

    </div>
@endsection
