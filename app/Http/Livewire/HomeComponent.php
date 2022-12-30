<?php

namespace App\Http\Livewire;

use App\Models\Annonce;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeComponent extends Component
{

    public $categories;
    public $sous_categories=[];


    public function mount(){

     $this->categories = Category::get();
        foreach( $this->categories as $val){

            $products_by_type = DB::table('products')
            ->select('name')
            ->groupByRaw('name')
            ->distinct('name')
            ->where('category_id','=',$val->id)
            ->get();
            array_push($this->sous_categories,   $products_by_type);

        }

    }

    public function render()
    {

        $annonce  = Annonce::all();
        $category = Category::all();
        return view('livewire.home-component', compact('category', 'annonce'))
        ->extends('layout.app')
        ->section('content');
    }



}
