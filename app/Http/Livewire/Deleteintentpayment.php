<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Deleteintentpayment extends Component
{

    public $id ;

    public function mount($id)  {
        $this->id=Product::find($id);
    }

    // public function deleteItems($id) {

    // $items =  Product::find($id);

    // }


    public function render()
    {
        return view('livewire.deleteintentpayment');
    }
}
