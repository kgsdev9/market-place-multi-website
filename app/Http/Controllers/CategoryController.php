<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;

class CategoryController extends Controller
{

    protected $categoryservice ;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryservice = $categoryService ;
     }

     public function show($id) {
        return view('category.productcategory.index', [
            'product' => $this->categoryservice->productCategoryCollection($id)
        ]);
     }


}
