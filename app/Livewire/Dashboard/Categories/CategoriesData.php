<?php

namespace App\Livewire\Dashboard\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesData extends Component
{
    use WithPagination;

    public $search;
    protected $listeners = ['refreshData' => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('dashboard.categories.categories-data',  [
                'data' =>
                    Category::where('name', 'like', '%' . $this->search . '%')
                        ->latest()
                        ->paginate(10)
            ]
        );
    }
}
