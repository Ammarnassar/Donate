@extends('layouts.dashboard')

@section('title' ,__('All Cases'))

@section('main')

    <div class="row justify-content-center">

        @livewire('index-item' ,[
        'name' => 'Contacts' ,
        'columns' => ['Name'  , 'Email' , 'Phone' , 'Case_Details' ] ,
        ])

    </div>
@endsection
