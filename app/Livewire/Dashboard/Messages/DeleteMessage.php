<?php

namespace App\Livewire\Dashboard\Messages;

use App\Models\Message;
use Livewire\Component;

class DeleteMessage extends Component
{
    public $message;
    protected $listeners = ['messageDelete'];

    public function messageDelete($id)
    {
        $this->message = Message::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->message->delete();

        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(MessagesData::class);

    }
    public function render()
    {
        return view('dashboard.messages.delete-message');
    }
}
