<?php

namespace App\Livewire\Dashboard\Services;

use App\Models\Service;
use Livewire\Component;

class CreateService extends Component
{
    public $name, $description, $icon;


    public function rules()
    {
        return Service::rules();
    }

    public function submit()
    {
        $data= $this->validate();
        Service::create($data);
        $this->reset(['name', 'description', 'icon']);

        $this->dispatch('createModalToggle');
        $this->dispatch('refreshData')->to(ServicesData::class);

        session()->flash('message', 'Service Created Successfully');
    }

    public function render()
    {
        return view('dashboard.services.create-service');
    }
}
