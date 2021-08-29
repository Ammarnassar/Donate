<div class="col-10">
    <div class="card pb-3 shadow">
        <div class="card-header d-flex justify-content-between w-100 align-items-center">
            <div class="w-75">
                <input type="text" class="form-control" placeholder="{{__('Search')}}" wire:model="search">
            </div>

            <div class="w-25 @if(App::getLocale() == 'ar') text-left @else text-right @endif">
                @if(!in_array(strtolower($name) , ['contacts' , 'donations']))
                    @if(strtolower($name) == 'users') @php $name = 'Admin' @endphp @endif
                    <a href="{{route('admin.'.strtolower(Str::singular($name)).'.create')}}" class=" btn btn-primary">
                        {{__('Add New').' '.__(Str::singular($name))}}

                        <i class="fas fa-plus-circle text-white mx-1"></i>
                    </a>
                @endif
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
                        <td>{{$key+1}}</td>
                        @for($i = 0 ; $i <= count($columns)-1 ; $i++)
                            @php
                                $col = strtolower($columns[$i]);
                            @endphp
                            <td>{{$row->$col}}</td>
                        @endfor
                        <td class="d-flex align-items-center justify-content-center">
                            @if(strtolower($name) == 'requests')
                                <a class="btn btn-link bg-success" data-toggle="modal"
                                   data-target="#editModal-{{$row->id}}">
                                    <i class="fas fa-edit text-white"></i>
                                </a>

                                <livewire:edit-request :row="$row" :key="$row->id"/>
                            @endif
                            <span class="mx-2"></span>
                            <a class="btn btn-link bg-danger" wire:click="confirmedDelete({{$row->id}})">
                                <i class="far fa-trash-alt text-white"></i>
                            </a>


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
