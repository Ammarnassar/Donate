<div class="modal fade" wire:ignore id="editModal-{{$rowId}}" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form wire:submit.prevent="save" class="w-100">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>{{__('Edit Row')}}</h4>
                </div>
                <div class="modal-body ">
                    <div class="d-flex flex-column">
                        <div class="form-group">
                            <label for="inputName">{{__('Case Title')}}</label>
                            <input type="text" wire:model.defer="title"
                                   class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                            <div class="text-danger text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="details">{{__('Case Details')}}</label>
                            <textarea wire:model.defer="details"
                                      class="form-control @error('details') is-invalid @enderror" rows="4"></textarea>
                            @error('details')
                            <div class="text-danger text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">{{__('Status')}}</label>
                            <select wire:model.defer="status"
                                    class="form-control @error('status') is-invalid @enderror custom-select">
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
                            <label for="category_id">{{__('Category')}}</label>
                            <select wire:model.defer="category_id"
                                    class="form-control @error('category_id') is-invalid @enderror custom-select">
                                <option value="" selected disabled>{{__('Select one')}}</option>

                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{__(ucfirst($category->title))}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="text-danger text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="goal">{{__('Case Goal')}}</label>
                            <input type="number" wire:model.defer="goal"
                                   class="@error('goal') is-invalid @enderror form-control">
                            @error('goal')
                            <div class="text-danger text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="raised">{{__('Case Raised')}}</label>
                            <input type="number" wire:model.defer="raised"
                                   class="@error('raiser') is-invalid @enderror form-control">
                            @error('raised')
                            <div class="text-danger text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-center">

                    <button type="reset" class="btn btn-secondary mx-1">{{__('Clear')}}</button>
                    <input type="submit" value="{{__('Submit')}}" class="btn btn-success mx-1 w-25">

                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('requestUpdated', () => {
            $('#editModal-{{$rowId}}').modal('hide');
        });
    </script>
@endpush
