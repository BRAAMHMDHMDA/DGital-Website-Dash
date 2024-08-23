<?php

namespace App\Livewire\Dashboard\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\WithPagination;

class SubscribersData extends Component
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
        return view('dashboard.subscribers.subscribers-data',  [
                'data' =>
                    Subscriber::where('email', 'like', '%' . $this->search . '%')
                        ->latest()
                        ->paginate(10)
            ]
        );

    }
}
