<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class UpdateSkillComponent extends Component
{
    public $name, $progress, $skill;
    protected $listeners = ['skillUpdate'];

    public function skillUpdate($id)
    {
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;
        $this->resetValidation();
        $this->dispatch('editModalToggle');
    }

    public function rules()
    {
        return Skill::rules();
    }

    public function submit()
    {
        $data = $this->validate();
        $this->skill->update($data);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshData')->to(SkillsDataComponent::class);

    }

    public function render()
    {
        return view('dashboard.skills.update-skill-component');
    }
}
