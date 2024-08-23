<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class CountersData extends Component
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
        return view('dashboard.counters.counters-data',  [
                'data' =>
                    Counter::where('name', 'like', '%' . $this->search . '%')
                        ->latest()
                        ->paginate(10)
            ]
        );
    }
}
