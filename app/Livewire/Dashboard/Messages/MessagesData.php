<?php

namespace App\Livewire\Dashboard\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesData extends Component
{
    use WithPagination;

    public $search;
    protected $listeners = [
        'refreshData' => '$refresh',
        'messageMarkAs' => 'markAs'
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function markAs($id)
    {
        $message = Message::find($id);
        if ($message->status === '0'){$message->status = '1';} else {$message->status = '0';}
        $message->save();
        $this->dispatch('refreshData')->to(MessagesData::class);
    }
    public function render()
    {
        return view('dashboard.messages.messages-data',  [
                'data' =>
                    Message::where('name', 'like', '%' . $this->search . '%')
                        ->latest()
                        ->paginate(10)
            ]
        );    }
}
