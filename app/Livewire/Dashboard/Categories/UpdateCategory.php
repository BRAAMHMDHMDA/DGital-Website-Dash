<?php

namespace App\Livewire\Dashboard\Categories;

use App\Models\Category;
use Livewire\Component;

class UpdateCategory extends Component
{
    public $name, $category;
    protected $listeners = ['categoryUpdate'];

    public function categoryUpdate($id)
    {
        $this->category = Category::find($id);
        $this->name = $this->category->name;
        $this->resetValidation();
        $this->dispatch('editModalToggle');
    }

    public function rules()
    {
        return Category::rules();
    }

    public function submit()
    {
        $data = $this->validate();
        $this->category->update($data);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshData')->to(CategoriesData::class);

    }

    public function render()
    {
        return view('dashboard.categories.update-category');
    }
}
