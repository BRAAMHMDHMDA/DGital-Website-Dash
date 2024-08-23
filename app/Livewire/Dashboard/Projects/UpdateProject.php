<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProject extends Component
{
    use WithFileUploads;

    public $name, $link, $image, $old_image, $description, $category_id, $project;
    public $categories;

    protected $listeners = ['projectUpdate'];

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
        return [
            'category_id' => 'Category'
        ];
    }
    public function projectUpdate($id)
    {
        $this->project = Project::find($id);
        $this->name = $this->project->name;
        $this->link = $this->project->link;
        $this->old_image = $this->project->image_url;
        $this->description = $this->project->description;
        $this->category_id = $this->project->category_id;
        $this->resetValidation();
        $this->dispatch('editModalToggle');
    }


    public function submit()
    {
        $data = $this->validate(
            $this->rules(),
            [],
            $this->attributes()
        );
        $result = Project::updateImage($data,$this->old_image);
        $this->project->update($result);

        $this->dispatch('editModalToggle');
        $this->dispatch('refreshData')->to(ProjectsData::class);


        session()->flash('message', 'Project Updated Successfully');
    }


    public function render()
    {
        return view('dashboard.projects.update-project');
    }
}
