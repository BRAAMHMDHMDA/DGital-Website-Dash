<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class CreateSkillsComponent extends Component
{
    public $name, $progress;


    public function rules()
    {
       return Skill::rules();
    }

    public function submit()
    {
        $data= $this->validate();
        Skill::create($data);
        $this->reset(['name', 'progress']);

        $this->dispatch('createModalToggle');
        $this->dispatch('refreshData')->to(SkillsDataComponent::class);

        session()->flash('message', 'Skill Created Successfully');
    }

    public function render()
    {
        return view('dashboard.skills.create-skills-component');
    }
}
