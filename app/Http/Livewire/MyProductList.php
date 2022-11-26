<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class MyProductList extends Component
{


    public $products ;
    public $cities ;
    public $countries;
    public $country;
    public $city;
    public $name;
    public $price;


    public function mount(){

       $this->products = Product::all();

       $this->cities =  DB::table('products')->distinct('country')->get();


      $this->countries = DB::table('products')->distinct('country')->get();

    }
    public function render()
    {
        return view('livewire.my-product-list')->extends('layout.app');
    }


    public function search(){

        $product = Product::query();


        if(!empty($this->name)){

            $this->products = $product->where('name','like','%'.$this->name.'%')->get();
        }


        if(!empty($this->country)){

            $this->products = $product->where('country','like','%'.$this->country.'%')->get();
        }

        if(!empty($this->city)){

            $this->products = $product->where('city','like','%'.$this->city.'%')->get();
        }


        if(!empty($this->price)){

            $this->products = $product->where('price','<=',$this->price)->get();
        }



    }

}
