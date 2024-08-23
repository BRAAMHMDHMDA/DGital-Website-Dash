<?php

namespace App\Livewire\Dashboard\Services;

use App\Models\Service;
use Livewire\Component;

class ShowService extends Component
{
    public $service;
    protected $listeners = ['serviceShow'];

    public function serviceShow($id)
    {
        $this->service = Service::find($id);
        $this->dispatch('showModalToggle');
    }

    public function render()
    {
        return view('dashboard.services.show-service');
    }
}
