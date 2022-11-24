<?php

namespace App\Services ;
use App\Models\Product;
use App\Models\Category;

class CategoryService   {

    protected $categoryservice ;

    public function __construct(Category $categoryservice)
    {
        $this->categoryservice = $categoryservice ;
    }

        public function collection ($id) {
            $this->categoryservice = Category::find($id);
            return  $this->categoryservice ;
        }

        public function productCategoryCollection($id) {
            $this->categoryservice = Product::where('category_id', '=', $id)
            ->paginate(20);
            return $this->categoryservice ;

        }


}

