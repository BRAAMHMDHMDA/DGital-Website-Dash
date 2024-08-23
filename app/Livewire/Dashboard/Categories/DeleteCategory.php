<?php

namespace App\Livewire\Dashboard\Categories;

use App\Models\Category;
use Livewire\Component;

class DeleteCategory extends Component
{
    public $category;
    protected $listeners = ['categoryDelete'];

    public function categoryDelete($id)
    {
        $this->category = Category::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->category->delete();

        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(CategoriesData::class);

    }
    public function render()
    {
        return view('dashboard.categories.delete-category');
    }
}
