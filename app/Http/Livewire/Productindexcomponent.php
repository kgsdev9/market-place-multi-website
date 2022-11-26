<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\Product;
use Livewire\Component;

class Productindexcomponent extends Component
{

    protected $paginationTheme = 'bootstrap';


    public $cart  ;
    public  $product ;

    public  $county ;
    public $countryselect  ;
    public  $city ;
    public $randomproduct;

    protected $querystring = ['countryselect'] ;


    public function mount(){
        $this->country= Country::all();
        $this->city= City::orderBy('name')->get();
        $this->randomproduct=  Product::all();


    }




    public  function filterByContry($id){
       $p= $this->randomproduct=Product::where('country_id','=',$id)->get();
        dd($p);
    }
    public function render()
    {
    /*    return view('livewire.productindexcomponent', [
            'country' => Country::orderBy('name')->get(),
            'city' => City::orderBy('name')->get(),
             'randomproduct'  => Product::paginate(80),
        ])->extends('layout.app');*/

        $this->cart  = Product::where('country_id', $this->querystring)->get() ;
        return view('livewire.productindexcomponent', [

        ])->extends('layout.app');
    }



    public function add($id) {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->cover_image,
                "statut"  => $product->statut,
                "product_id"  =>$product->id,
            ];
        }
        session()->put('cart', $cart);
        $this->emit('updateCartCount');
        return Redirect()->back();
    }


}
