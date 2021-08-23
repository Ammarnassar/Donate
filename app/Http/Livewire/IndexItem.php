<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class IndexItem extends Component
{
    use WithPagination;

    public $search;
    public $name = '';
    public $columns = [];
    public $item_id;

    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'confirmed' => 'delete'
    ];

    public function render()
    {
        return view('livewire.index-item', [
            'model' => DB::table(strtolower($this->name))->where(strtolower($this->columns[0]), 'like', '%' . $this->search . '%')
                ->latest()->paginate(10),
        ]);
    }

    public function delete()
    {
        DB::table(strtolower($this->name))->delete($this->item_id);

        $this->alert(
            'success',
            __(Str::singular($this->name) . ' Deleted Successfully !')
        );
    }

    public function confirmedDelete($id)
    {
        $this->item_id = $id;

        $this->confirm(__('Are you sure to delete this item ?'), [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => __('Cancel'),
            'confirmButtonText' => __('Confirm'),
            'confirmButtonColor' => 'rgb(221, 51, 51)',
            'cancelButtonColor' => 'rgb(48, 133, 214)',
            'onConfirmed' => 'confirmed',
        ]);


    }

}
