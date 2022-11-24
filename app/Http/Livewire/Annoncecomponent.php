<?php

namespace App\Http\Livewire;

use App\Models\Annonce;
use Livewire\Component;
use Livewire\WithPagination;

class Annoncecomponent extends Component
{
    use WithPagination ;

    protected $paginationTheme = 'bootstrap';
    public function render()
    {


        $collectionAnnnonce = Annonce::paginate(20);
        return view('livewire.annoncecomponent', [
            'annonce' =>$collectionAnnnonce
        ])
        ->extends('layout.app');
    }
}
