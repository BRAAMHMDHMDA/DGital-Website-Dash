<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsData extends Component
{
    use WithPagination;

    public $search;
    protected $listeners = ['refreshData' => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('dashboard.projects.projects-data',  [
                'data' =>
                    Project::where('name', 'like', '%' . $this->search . '%')
                        ->latest()
                        ->with('category')
                        ->paginate(10)
            ]
        );
    }
}
