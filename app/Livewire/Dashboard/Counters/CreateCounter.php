<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\Counter;
use Livewire\Component;

class CreateCounter extends Component
{
    public $name, $count, $icon;


    public function rules()
    {
        return Counter::rules();
    }

    public function submit()
    {
        $data= $this->validate();
        Counter::create($data);
        $this->reset(['name', 'count', 'icon']);

        $this->dispatch('createModalToggle');
        $this->dispatch('refreshData')->to(CountersData::class);

        session()->flash('message', 'Counter Created Successfully');
    }

    public function render()
    {
        return view('dashboard.counters.create-counter');
    }
}
