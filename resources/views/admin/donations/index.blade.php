@extends('layouts.dashboard')

@section('title' ,__('All Donations'))

@section('main')

    <div class="row justify-content-center">

        @livewire('index-item' ,[
        'name' => 'Donations' ,
        'columns' => ['Name'  , 'Email' , 'Phone' , 'Type' , 'Amount' , 'Request_id'] ,
        ])

    </div>
@endsection
