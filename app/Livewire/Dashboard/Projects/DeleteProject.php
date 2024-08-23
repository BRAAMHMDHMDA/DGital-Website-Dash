<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Project;
use Livewire\Component;

class DeleteProject extends Component
{
    public $project;
    protected $listeners = ['projectDelete'];

    public function projectDelete($id)
    {
        $this->project = Project::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->project->delete();
        Project::deleteImage($this->project->image_url);

        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(ProjectsData::class);

    }
    public function render()
    {
        return view('dashboard.projects.delete-project');
    }
}
