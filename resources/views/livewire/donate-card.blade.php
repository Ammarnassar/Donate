<div class="donates-wraps shadow">
    <div class="payment-method">
        <h3>{{__('Personal Information')}}</h3>
    </div>
    <div class="contact-form mt-4">
        <form wire:submit.prevent="save">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" id="firstName" class="form-control @error('firstName') is-invalid @enderror" placeholder="{{__('First Name')}}"
                               wire:model="firstName">
                        @error('firstName')
                        <div class="text-danger text-sm mt-1">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" id="lastName" class="form-control @error('lastName') is-invalid @enderror" placeholder="{{__('Last Name')}}"
                               wire:model="lastName">
                        @error('lastName')
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
                    <label for="donateType" class="fw-bold">{{__('Donation Type')}}</label>
                    <div class="form-check col-md-6 d-flex p-0">
                        <input class="form-check-input mx-1" type="radio" name="donateType"
                               wire:model="donateType" value="cash">
                        <label class="form-check-label mx-1" for="flexRadioDefault1">
                            {{__('Cash')}}
                        </label>
                    </div>
                    <div class="form-check col-md-6 d-flex p-0">
                        <input class="form-check-input mx-1" type="radio" name="donateType"
                               wire:model="donateType" value="kind">
                        <label class="form-check-label mx-1" for="flexRadioDefault2">
                            {{__('In-Kind')}}
                        </label>
                    </div>
                    @error('donateType')
                    <div class="text-danger text-sm mt-1">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <select class="form-control">
                            <option selected disabled>{{__('Donation Clause')}}</option>
                            <option value="">{{__('Medical')}}</option>
                            <option value="">{{__('Education')}}</option>
                        </select>
                    </div>
                </div>

                @if($donateType == 'cash')
                    <div class="col-lg-12">
                        <div class="form-group mt-2">
                            نقدي
                        </div>
                    </div>
                @elseif($donateType == 'kind')
                    <div class="col-lg-12">
                        <div class="form-group mt-2">
                            عيني
                        </div>
                    </div>
                @endif


            </div>
            <div class="col-lg-12 mt-4">
                <button type="submit" class="default-btn" >{{__('Donate Now')}}</button>
            </div>
        </form>
    </div>
</div>
