<?php

namespace App\View\Components\Front;

use App\Models\Category;
use App\Models\Project;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectsComponent extends Component
{
    public $projects;
    public $categories;
    public function __construct()
    {
        $this->categories = Category::has('projects')->get();
        $this->projects = Project::latest()->take(6)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.projects-component');
    }
}
