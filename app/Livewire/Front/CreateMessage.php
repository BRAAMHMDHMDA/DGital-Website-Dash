<?php

namespace App\Livewire\Front;

use App\Models\Message;
use Livewire\Component;

class CreateMessage extends Component
{
    public $name, $email, $subject, $message,$status='0';


    public function rules()
    {
        return Message::rules();
    }

    public function submit()
    {
        $data= $this->validate();
        Message::create($data);
        $this->reset(['name', 'email', 'subject','message']);

        session()->flash('message', 'Message Send Successfully');
    }

    public function render()
    {
        return view('components.front.livewire.create-message');
    }
}
