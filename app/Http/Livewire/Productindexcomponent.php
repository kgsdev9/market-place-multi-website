<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Coeur;
use App\Models\Country;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Productindexcomponent extends Component
{




    protected $paginationTheme = 'bootstrap';

    use  WithPagination ;

    public $cart  ;
    public  $product ;

    public  $county ;

    public  $city ;
    public $randomproduct;

    public $cities;
    public $countries;


    public $price_min ;
    public $price_max;
    public $country;

    protected $querystring = ['countryselect'] ;


    public function mount(){

        $this->cities = City::orderBy('name')->get();
        $this->countries = Country::orderBy('name')->get();

        $this->randomproduct=  Product::get();


    }
    public function filterByPrice(){
        if( ($this->price_min!=null)&&( $this->price_max!=null)){

            $this->randomproduct = Product::where('price','>=',$this->price_min)
            ->where('price','<=',$this->price_max)
            ->get();

        }elseif(($this->price_min==null)&&( $this->price_max!=null)){
            $this->randomproduct = Product::where('price','<=',$this->price_max)->get();

        }elseif(($this->price_min!=null)&&( $this->price_max==null)){
            $this->randomproduct = Product::where('price','>=',$this->price_min)->get();

        }


      }
    public function filterByCity(){

        if($this->city!=null){
            $this->randomproduct= Product::where('city_id','=',$this->city)->get();
        }else{
            $this->randomproduct = Product::all();
        };




    }

    public function filterByCountry(){

        if($this->country!=null){
            $this->randomproduct= Product::where('country_id','=',$this->country)->get();
        }else{
            $this->randomproduct = Product::all();
        };


     }






    public function render()
    {

        $this->cart  = Product::where('country_id', $this->querystring)->get() ;
        return view('livewire.productindexcomponent', [
             'random'  =>    $this->randomproduct

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

    public function addWishlist($id) {

        if(Auth::check()) {
            if(Coeur::where('user_id', Auth::user()->id)->where('product_id', $id)->exists()){
                // Alert::toast("Ce Produit existe deja à la liste d'envie",'warning');
                return Redirect()->back();
            }else {
          $whishlist =  Coeur::create([
                    'user_id' => Auth::user()->id,
                    'product_id' =>$id
                  ]);
                //   Alert::toast("Ajouter à la liste d'envies",'success');
                  return Redirect()->back();
            }
        } else {
            return redirect()->route('login');
        }
     }



}
