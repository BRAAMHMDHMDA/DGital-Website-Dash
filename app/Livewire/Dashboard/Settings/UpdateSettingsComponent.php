<?php

namespace App\Livewire\Dashboard\Settings;

use App\Models\Setting;
use Livewire\Component;

class UpdateSettingsComponent extends Component
{
    public $settings;

    public function mount()
    {
        $this->settings = Setting::find(1);
    }

    public function rules()
    {
        return [
            'settings.name' => 'required|string',
            'settings.email' => 'required|email',
            'settings.phone' => 'required',
            'settings.address' => 'required',
            'settings.facebook' => 'nullable|url',
            'settings.twitter' => 'nullable|url',
            'settings.linkedin' => 'nullable|url',
            'settings.instagram' => 'nullable|url',
        ];
    }

    public function submit()
    {
        $this->validate();
        $this->settings->save();
        session()->flash('message', 'Settings Updated Successfully');
    }

    public function render()
    {
        return view('dashboard.settings.update-settings-component');
    }
}
