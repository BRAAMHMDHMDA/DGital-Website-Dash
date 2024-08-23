<?php

namespace App\Livewire\Dashboard\Messages;

use App\Models\Message;
use Livewire\Component;

class ShowMessage extends Component
{
    public $message;
    protected $listeners = ['messageShow'];

    public function messageShow($id)
    {
        $this->message = Message::find($id);
        $this->dispatch('showModalToggle');
        $this->message->status = "1";
        $this->message->save();
        $this->dispatch('refreshData')->to(MessagesData::class);
    }

    public function render()
    {
        return view('dashboard.messages.show-message');
    }
}
