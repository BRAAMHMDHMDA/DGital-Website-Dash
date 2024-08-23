<?php

namespace App\View\Components\Front;

use App\Models\Service;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServicesComponent extends Component
{
    public $services;

    public function __construct($number)
    {
        $this->services = Service::latest()->take($number)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.services-component');
    }
}
