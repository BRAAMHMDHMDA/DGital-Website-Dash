<?php

namespace App\Livewire\Dashboard\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class DeleteSubscriber extends Component
{
    public $subscriber;
    protected $listeners = ['subscriberDelete'];

    public function subscriberDelete($id)
    {
        $this->subscriber = Subscriber::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->subscriber->delete();

        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(SubscribersData::class);

    }

    public function render()
    {
        return view('dashboard.subscribers.delete-subscriber');
    }
}
