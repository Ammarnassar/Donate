@extends('layouts.dashboard')

@section('title' ,__('All Causes'))

@section('main')

    <div class="row justify-content-center">

        @livewire('index-item' ,[
        'name' => 'Requests' ,
        'columns' => ['Title'  , 'Status' , 'Raised' , 'Goal' ] ,
        ])

    </div>
@endsection
