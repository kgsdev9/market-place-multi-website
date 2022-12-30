<?php

namespace App\Http\Livewire;

use App\Models\Annonce;
use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;

class Annoncecomponent extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';

    public  $depart;
    public  $arrive;
    public  $date_depart;
    public  $kilo;

    public $countries_start ;
    public $countries_destination ;
    public $dates_departs ;
    public $kilos ;
    public $annonces;

   

    public function mount(){

        $this->countries_start = Annonce::orderBy('country_start')->get();
        $this->countries_destination = Annonce::orderBy('country_destination')->get();
        $this->dates_departs = Annonce::orderBy('start_date')->get();
        $this->kilos = Annonce::orderBy('kilo')->get();
        $this->annonces = Annonce::all();


    }

    public function search(){

    
        $req = Annonce::query();

        


      
        if(($this->depart!=null)&&($this->arrive==null)&&($this->date_depart==null)&&($this->kilo==null)){

            $this->annonces = Annonce::where('country_start','like','%'.$this->depart.'%')->get(); 
       
        }elseif(($this->depart==null)&&($this->arrive!=null)&&($this->date_depart==null)&&($this->kilo==null)){

            $this->annonces = Annonce::where('country_destination','like','%'.$this->arrive.'%')->get(); 
        }elseif(($this->depart==null)&&($this->arrive==null)&&($this->date_depart!=null)&&($this->kilo==null)){

            $this->annonces = Annonce::where('start_date','like','%'.$this->date_depart.'%')->get(); 
        }elseif(($this->depart==null)&&($this->arrive==null)&&($this->date_depart==null)&&($this->kilo!=null)){

            $this->annonces = Annonce::where('kilo','like','%'.$this->kilo.'%')->get(); 
        }else{


            $this->annonces = Annonce::where('country_start','like','%'.$this->depart.'%')
           ->where('country_destination','like','%'.$this->arrive.'%')
           ->where('start_date','like','%'.$this->date_depart.'%')
           ->where('kilo','like','%'.$this->kilo.'%')
           ->get(); 

          
        }
        

    }



    public function render()
    {


        $urlcurrent =  url()->current() ;

        $shareComponent = \Share::page(
            $urlcurrent
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();


       
        return view('livewire.annoncecomponent', [
       
            'shareComponent'  => $shareComponent
        ])
        ->extends('layout.app');
    }
}
