<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DonateCard extends Component
{
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $donateType;

    protected $rules = [
        'firstName' => 'required|string|max:25',
        'lastName' => 'required|max:25',
        'email' => 'required|string|email',
        'phone' => 'required|numeric',
        'donateType' => 'required',
    ];

    public function render()
    {
        return view('livewire.donate-card');
    }

    public function updated()
    {
        $this->validate();
    }

    public function save()
    {
        $this->validate();
    }
}
