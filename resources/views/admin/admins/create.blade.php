@extends('layouts.dashboard')

@section('title' ,__('New Admin'))

@section('main')

    <section class="content">
        <form action="{{route('admin.admin.store')}}" method="post" id="newAdminForm">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Admin Information')}}</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">{{__('Name')}}</label>
                                <input type="text" id="inputName" name="name"
                                       class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                <div class="text-danger text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">{{__('Email')}}</label>
                                <input type="text" id="inputName" name="email"
                                       class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                <div class="text-danger text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">{{__('Password')}}</label>
                                <input type="text" id="inputName" name="password"
                                       class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                <div class="text-danger text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <button type="reset" form="newCaseForm" class="btn btn-secondary mx-1">{{__('Clear')}}</button>
                    <input type="submit" value="{{__('Submit')}}" form="newAdminForm"
                           class="btn btn-success mx-1 w-auto">
                </div>
            </div>
        </form>
    </section>

@endsection
