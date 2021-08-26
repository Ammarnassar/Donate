<?php

namespace App\Http\Livewire;

use App\Models\Request;
use Illuminate\Support\Str;
use Livewire\Component;

class EditRequest extends Component
{
    public $title;
    public $details;
    public $status;
    public $goal;
    public $raised;
    public $category_id;
    public $rowId;

    public function render()
    {
        return view('livewire.edit-request');
    }


    protected $rules = [
        'title' => 'required',
        'details' => 'required',
        'status' => 'required',
        'goal' => 'required',
        'raised' => 'required',
        'category_id' => 'required',
    ];

    public function mount($row)
    {
        $this->rowId = $row->id;
        $this->details = $row->details;
        $this->title = $row->title;
        $this->status = $row->status;
        $this->goal = $row->goal;
        $this->raised = $row->raised;
        $this->category_id = $row->category_id;
    }

    public function save()
    {
        $data = $this->validate();

        Request::findOrFail($this->rowId)->update($data);

        $this->alert(
            'success',
            __(__('Request Updated Successfully !'))
        );

        $this->emit('requestUpdated');

        $this->reset();

    }
}
