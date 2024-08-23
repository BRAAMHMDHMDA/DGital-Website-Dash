<?php

namespace App\View\Components\Front;

use App\Models\Counter;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CountersComponent extends Component
{
    public $counters;
    /**
     * Create a new component instance.
     */
    public function __construct($number)
    {
        $this->counters = Counter::latest()->take($number)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.counters-component');
    }
}
