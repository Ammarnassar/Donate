<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;

class DonateCard extends Component
{
    public $name;
    public $email;
    public $phone;
    public $type;
    public $note;
    public $amount;
    public $details;
    public $case;


    protected $rules = [
        'name' => 'required|string|max:25',
        'email' => 'required|string|email',
        'phone' => 'required|numeric',
        'type' => 'required',
        'note' => 'nullable|string',
        'amount' => 'required_if:donateType,cash',
        'details' => 'required_if:donateType,kind',
    ];

    public function render()
    {
        return view('livewire.donate-card');
    }

    public function updated()
    {
//        $this->validate();
    }

    public function save()
    {
        $data = $this->validate();

        $this->case->donations()->create(array_filter($data));

        $this->alert('success', __('Thank You !') , [
            'text' => __('Donate Successfully !')
        ]);

        $this->reset( 'name' , 'email' , 'phone' , 'type' , 'note' ,'details' , 'amount');
    }
}
