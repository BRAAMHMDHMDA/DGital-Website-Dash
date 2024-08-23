<?php

namespace App\Livewire\Dashboard\Services;

use App\Models\Service;
use Livewire\Component;

class DeleteService extends Component
{
    public $service;
    protected $listeners = ['serviceDelete'];

    public function serviceDelete($id)
    {
        $this->service = Service::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->service->delete();

        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(ServicesData::class);

    }
    public function render()
    {
        return view('dashboard.services.delete-service');
    }
}
