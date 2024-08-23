<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\Counter;
use Livewire\Component;

class UpdateCounter extends Component
{
    public $name, $count, $icon, $counter;
    protected $listeners = ['counterUpdate'];

    public function counterUpdate($id)
    {
        $this->counter = Counter::find($id);
        $this->name = $this->counter->name;
        $this->count = $this->counter->count;
        $this->icon = $this->counter->icon;
        $this->resetValidation();
        $this->dispatch('editModalToggle');
    }

    public function rules()
    {
        return Counter::rules();
    }

    public function submit()
    {
        $data = $this->validate();
        $this->counter->update($data);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshData')->to(CountersData::class);

    }

    public function render()
    {
        return view('dashboard.counters.update-counter');
    }
}
