<?php

namespace App\Livewire\Front;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribeComponent extends Component
{
    public $email;

    public function rules()
    {
        return [
            'email' => 'required|unique:subscribers|email'
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        Subscriber::create($data);

        $this->reset(['email']);
        $this->resetValidation();

        session()->flash('message', 'Subscribed Successfully');
    }

    public function render()
    {
        return view('components.front.livewire.subscribe-component');
    }
}
