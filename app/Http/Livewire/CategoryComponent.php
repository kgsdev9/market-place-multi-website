<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryComponent extends Component
{




    public function render()
    {

        $category  = Category::orderBy('name')->paginate(10);
        return view('livewire.category-component', [
            'category' =>$category, ])
        ->extends('layout.app')
        ->section('content');
    }
}
