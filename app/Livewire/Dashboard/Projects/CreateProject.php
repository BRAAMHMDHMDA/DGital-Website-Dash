<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProject extends Component
{
    use WithFileUploads;
    public $name, $link, $image, $old_image, $description, $category_id;
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }
    public function rules()
    {
        return Project::rules();
    }
    public function attributes()
    {
        return ['category_id' => 'Category'];
    }

    public function submit()
    {
        $data= $this->validate();
        Project::create(Project::storeImage($data));

        $this->reset(['name', 'link', 'image', 'description', 'category_id']);

        $this->dispatch('createModalToggle');
        $this->dispatch('refreshData')->to(ProjectsData::class);

        session()->flash('message', 'Project Created Successfully');
    }


    public function render()
    {
        return view('dashboard.projects.create-project');
    }
}
