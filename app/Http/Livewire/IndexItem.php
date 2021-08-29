<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Request;
use App\Models\Post;

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
        'confirmed' => 'delete',
        'requestUpdated' => '$refresh'
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
        if (strtolower($this->name) == 'requests') {
            Request::findOrFail($this->item_id)->delete();
        } elseif(strtolower($this->name) == 'posts') {
            Post::findOrFail($this->item_id)->delete();

        }else{
            Str::singular(ucfirst($this->name))::findOrFail($this->item_id)->delete();
        }

        $this->alert(
            'success',
            __(Str::singular($this->name) . ' Deleted Successfully !')
        );
    }

    public function confirmedDelete($id)
    {
        $this->item_id = $id;

        $alert_options = [
            'toast' => false,
            'position' => 'center',
            'text' => (strtolower($this->name) == 'requests' ? 'ملاحظة : سيتم حذف التبرعات المرتبطة بهذه الحالة' : ''),
            'showConfirmButton' => true,
            'cancelButtonText' => __('Cancel'),
            'confirmButtonText' => __('Confirm'),
            'confirmButtonColor' => 'rgb(221, 51, 51)',
            'cancelButtonColor' => 'rgb(48, 133, 214)',
            'onConfirmed' => 'confirmed',
        ];

        $this->confirm(__('Are you sure to delete this item ?'), $alert_options);


    }

}
