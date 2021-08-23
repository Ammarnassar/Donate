@extends('layouts.dashboard')

@section('title' ,__('All Admins'))

@section('main')

    <div class="row justify-content-center">

        @livewire('index-item' ,[
        'name' => 'Users' ,
        'columns' => ['Name' , 'Email' , 'Created_at'] ,
        ])

    </div>
@endsection
