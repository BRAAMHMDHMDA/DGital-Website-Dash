<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class DeleteSkillComponent extends Component
{
    public $skill;
    protected $listeners = ['skillDelete'];

    public function skillDelete($id)
    {
        $this->skill = Skill::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->skill->delete();

        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(SkillsDataComponent::class);

    }

    public function render()
    {
        return view('dashboard.skills.delete-skill-component');
    }
}
