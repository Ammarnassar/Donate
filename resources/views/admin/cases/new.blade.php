@extends('layouts.dashboard')

@section('title' ,__('New Case'))

@section('main')

    <section class="content">
        <form action="{{route('admin.request.store')}}" method="post" id="newCaseForm">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-fuchsia">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Case Information')}}</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">{{__('Case Title')}}</label>
                                <input type="text" id="inputName" name="title" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                <div class="text-danger text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">{{__('Case Details')}}</label>
                                <textarea id="inputDescription" name="details" class="form-control @error('details') is-invalid @enderror" rows="4"></textarea>
                                @error('details')
                                <div class="text-danger text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">{{__('Status')}}</label>
                                <select id="inputStatus" name="status" class="form-control @error('status') is-invalid @enderror custom-select">
                                    <option selected disabled>{{__('Select one')}}</option>
                                    <option value="progress">{{__('In Progress')}}</option>
                                    <option value="finished">{{__('Finished')}}</option>
                                </select>
                                @error('status')
                                <div class="text-danger text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputStatus">{{__('Category')}}</label>
                                <select id="inputStatus" name="category_id" class="form-control @error('status') is-invalid @enderror custom-select">
                                    <option value="" selected disabled>{{__('Select one')}}</option>

                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{__(ucfirst($category->title))}}</option>
                                    @endforeach
                                </select>
                                @error('status')
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
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Goal & Raised')}}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputEstimatedBudget">{{__('Case Goal')}}</label>
                                <input type="number" name="goal" id="inputEstimatedBudget" class="@error('goal') is-invalid @enderror form-control">
                                @error('goal')
                                <div class="text-danger text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputSpentBudget">{{__('Case Raised')}}</label>
                                <input type="number" name="raised" id="inputSpentBudget" class="@error('raiser') is-invalid @enderror form-control">
                                @error('raised')
                                <div class="text-danger text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="reset" form="newCaseForm" class="btn btn-secondary mx-1">{{__('Clear')}}</button>
                            <input type="submit" value="{{__('Submit')}}" form="newCaseForm" class="btn btn-success mx-1 w-25">
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </section>

@endsection
