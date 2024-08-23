<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\Counter;
use Livewire\Component;

class DeleteCounter extends Component
{
    public $counter;
    protected $listeners = ['counterDelete'];

    public function counterDelete($id)
    {
        $this->counter = Counter::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->counter->delete();

        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(CountersData::class);

    }

    public function render()
    {
        return view('dashboard.counters.delete-counter');
    }
}
