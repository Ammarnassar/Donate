<div class="article-content causes-details-two mt-0 ">
    <div class="payment-method">
        <h3>{{__('Personal Information')}}</h3>
    </div>
    <div class="contact-form mt-4">
        <form wire:submit.prevent="save">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{__('Name')}}"
                               wire:model="name">
                        @error('name')
                        <div class="text-danger text-sm mt-1">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('Email')}}"
                               wire:model="email">
                        @error('email')
                        <div class="text-danger text-sm mt-1">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" name="phone_number" class="form-control @error('phone') is-invalid @enderror" placeholder="{{__('Phone')}}"
                               wire:model="phone">
                        @error('phone')
                        <div class="text-danger text-sm mt-1">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <h3>{{__('Donation Information')}}</h3>
                <div class="form-group">
                    <label for="type" class="fw-bold">{{__('Donation Type')}}</label>
                    <div class="form-check col-md-6 d-flex p-0">
                        <input class="form-check-input mx-1" type="radio" name="type"
                               wire:model="type" value="cash">
                        <label class="form-check-label mx-1" for="flexRadioDefault1">
                            {{__('Cash')}}
                        </label>
                    </div>
                    <div class="form-check col-md-6 d-flex p-0">
                        <input class="form-check-input mx-1" type="radio" name="type"
                               wire:model="type" value="material">
                        <label class="form-check-label mx-1" for="flexRadioDefault2">
                            {{__('Material')}}
                        </label>
                    </div>
                    @error('type')
                    <div class="text-danger text-sm mt-1">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                @if($type == 'cash')
                    <div class="col-lg-12">
                        <div class="form-group mt-2">
                            <input type="text" name="amount" class="form-control @error('amount') is-invalid @enderror" placeholder="{{__('Amount')}}"
                                   wire:model="amount">
                            @error('amount')
                            <div class="text-danger text-sm mt-1">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                @elseif($type == 'material')
                    <div class="col-lg-12">
                        <div class="form-group mt-2">
                            <textarea type="text" name="details" class="form-control @error('details') is-invalid @enderror" placeholder="{{__('Kind Details')}}"
                                       wire:model="details"> </textarea>
                            @error('details')
                            <div class="text-danger text-sm mt-1">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>

                @endif
                <div class="col-lg-12">
                    <div class="form-group mt-2">
                        <textarea type="text" name="note" class="form-control @error('note') is-invalid @enderror" placeholder="{{__('Notes')}}"
                                  wire:model="note"> </textarea>
                        @error('note')
                        <div class="text-danger text-sm mt-1">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="col-lg-12 mt-4">
                <button type="submit" class="default-btn" >{{__('Donate Now')}}</button>
            </div>
        </form>
    </div>
</div>
