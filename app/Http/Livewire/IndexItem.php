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

    protected $queryString = ['search'];
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.index-item' , [
            'model' => DB::table(strtolower($this->name))->where(strtolower($this->columns[0]), 'like', '%'.$this->search.'%')
                ->paginate(10),
        ]);
    }

    public function delete($id)
    {
        DB::table(strtolower($this->name))->delete($id);

        $this->alert(
            'success',
            Str::singular($this->name).' Deleted Successfully !'
        );

    }

}
