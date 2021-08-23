@extends('layouts.dashboard')

@section('title' ,__('New Post'))

@section('main')

    <section class="content">
        <form action="{{route('admin.post.store')}}" method="post" id="newPostForm">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Post Information')}}</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">{{__('Title')}}</label>
                                <input type="text" id="inputName" name="title"
                                       class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                <div class="text-danger text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">{{__('Body')}}</label>
                                <textarea id="inputDescription" name="body"
                                          class="form-control @error('details') is-invalid @enderror"
                                          rows="4"></textarea>
                                @error('details')
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
                    <input type="submit" value="{{__('Submit')}}" form="newPostForm"
                           class="btn btn-success mx-1 w-auto">
                </div>
            </div>
        </form>
    </section>

@endsection
