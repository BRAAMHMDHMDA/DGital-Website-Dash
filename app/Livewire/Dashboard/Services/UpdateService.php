<?php

namespace App\Livewire\Dashboard\Services;

use App\Models\Service;
use Livewire\Component;

class UpdateService extends Component
{
    public $name, $description, $icon, $service;
    protected $listeners = ['serviceUpdate'];

    public function serviceUpdate($id)
    {
        $this->service = Service::find($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->icon = $this->service->icon;
        $this->resetValidation();
        $this->dispatch('editModalToggle');
    }

    public function rules()
    {
        return Service::rules();
    }

    public function submit()
    {
        $data = $this->validate();
        $this->service->update($data);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshData')->to(ServicesData::class);

    }

    public function render()
    {
        return view('dashboard.services.update-service');
    }
}
