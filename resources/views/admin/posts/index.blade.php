@extends('layouts.dashboard')

@section('title' ,__('All Posts'))

@section('main')

    <div class="row justify-content-center">

        @livewire('index-item' ,[
        'name' => 'Posts' ,
        'columns' => ['Title'  , 'Created_at' , 'Updated_at'] ,
        ])

    </div>
@endsection
