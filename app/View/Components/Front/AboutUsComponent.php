<?php

namespace App\View\Components\Front;

use App\Models\Skill;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AboutUsComponent extends Component
{
    public $skills;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->skills = Skill::latest()->take(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.about-us-component');
    }
}
