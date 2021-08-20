<div class="col-10">
    <div class="card pb-3 shadow">
        <div class="card-header d-flex justify-content-between w-100 align-items-center">
            <div class="w-75">
                <input type="text" class="form-control" placeholder="{{__('Search')}}" wire:model="search">
            </div>
            <div class="w-25 @if(App::getLocale() == 'ar') text-left @else text-right @endif">
                <a href="{{route('admin.'.strtolower(Str::singular($name)).'.create')}}" class=" btn btn-primary">
                    {{__('Add New').' '.__(Str::singular($name))}}

                    <i class="fas fa-plus-circle text-white mx-1"></i>
                </a>

            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body ">
            <table id="example2" class="table table-bordered table-hover table-responsive-md">
                <thead>
                <tr>
                    <th>#</th>
                    @foreach($columns as $column)
                        <th>{{__($column)}}</th>
                    @endforeach
                    <th style="width: 1rem"> {{__('Action')}}</th>
                </tr>
                </thead>
                <tbody>

                @foreach($model as $key => $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        @for($i = 0 ; $i <= count($columns)-1 ; $i++)
                            @php
                                $col = strtolower($columns[$i]);
                            @endphp
                            <td>{{$row->$col}}</td>
                        @endfor
                        <td class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-link bg-success"  data-toggle="modal" data-target="#editModal-{{$row->id}}">
                                <i class="fas fa-edit text-white"></i>
                            </a>
                            <span class="mx-2"></span>
                            <a class="btn btn-link bg-danger" data-toggle="modal" data-target="#deleteModal-{{$row->id}}">
                                <i class="far fa-trash-alt text-white"></i>
                            </a>

                            <div class="modal fade deleteModal" id="deleteModal-{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content pt-5">
                                        <div class="modal-body text-center ">
                                            <h4>Are You Sure to delete this ?</h4>
                                        </div>
                                        <div class="modal-footer d-flex align-items-center justify-content-center">
                                            <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">
                                                Close
                                            </button>
                                            <button wire:click="delete({{$row->id}})" type="button"
                                                    class="btn btn-danger mx-2">Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(strtolower($name) == 'posts')
                            <livewire:post.edit-post :row="$row" :key="$row->id"/>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="d-flex justify-content-between align-items-center px-4 py-1">
            <div>
                Showing {{$model->count()}} of {{$model->total()}}
            </div>
            <div>
                {{$model->links()}}
            </div>
        </div>
    </div>


</div>
