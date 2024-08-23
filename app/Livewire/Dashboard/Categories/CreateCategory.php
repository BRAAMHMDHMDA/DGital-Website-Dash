<?php

namespace App\Livewire\Dashboard\Categories;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name;


    public function rules()
    {
        return Category::rules();
    }

    public function submit()
    {
        $data= $this->validate();
        Category::create($data);
        $this->reset(['name']);

        $this->dispatch('createModalToggle');
        $this->dispatch('refreshData')->to(CategoriesData::class);

        session()->flash('message', 'Category Created Successfully');
    }
    public function render()
    {
        return view('dashboard.categories.create-category');
    }
}
