<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\AnnonceRequest;
use RealRashid\SweetAlert\Facades\Alert;


class AnnonceController extends Controller
{

    public function __construct()  {
        return $this->middleware('auth');
    }


    public function   index() {
        return view('dashboard.annonce.annonce');

    }


    public function store(Request  $request) {
        $id_user =  Auth::user()->id;
        $new = new Annonce();
        $new->title = $request->input('title');
        $new->kilo = $request->input('kilo');
        $new->price = $request->input('price');
        $new->country_start = $request->input('country_start');
        $new->city_start = $request->input('city_start');
        $new->country_destination = $request->input('country_destination');
        $new->city_destination = $request->input('city_destination');
        $new->start_date = $request->input('start_date');
        $new->description = $request->input('description');
        $new->user_id = $id_user;
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('annonces/images/' , $filename);
            $new->image  = $filename;
         }

        $new->save();
        $msg= " Votre Annonce a été enregistrée avec success ";
        Alert::success('Success', $msg);
        return redirect()->route('list.annonce');

    }


    public function  annonce_liste() {
        $user = Auth::user()->id;
        $annonce = Annonce::where('user_id', $user)->orderByDesc('created_at')->paginate(10);
        return view('dashboard.annonce.liste', compact('annonce'));
    }



    public function   edit_annonce(int $id)  {
    $edit = Annonce::find($id);
    return view('dashboard.annonce.edit', compact('edit'));


    }

    public function update_annonce( Request $request , int $id)  {
        $update  = Annonce::find($id);
        $update->title = $request->input('title');
        $update->kilo = $request->input('kilo');
        $update->price = $request->input('price');
        $update->country_start = $request->input('country_start');
        $update->city_start = $request->input('city_start');
        $update->country_destination = $request->input('country_destination');
        $update->city_destination = $request->input('city_destination');
        $update->start_date = $request->input('start_date');
        $update->description = $request->input('description');
        if($request->hasFile('image')) {
            $chemin = 'annonces/images/'.$update->image;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
            $file = $request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('annonces/images/' , $filename);
            $update->image  = $filename;
         }

         $update->update();
         Alert::success('Modification', 'Informations  Modifiées avec succès');
         return redirect()->route('list.annonce');

    }

    public function delete_annanonce(int $id) {

        $annonce = Annonce::find($id);
        $chemin =  'annonces/images'. $annonce->image ;

        if(File::exists($chemin)) {
          $delete =   File::delete($chemin) ;
        }

        $annonce->delete();
        Alert::warning('Supression', 'Votre annonce a été supprimée avec success');
        return redirect()->route('list.annonce');
    }


    public function show($id) {

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



        $annonce = Annonce::orderByDesc('created_at')->paginate(20);
        $detailannonce = Annonce::find($id);
    return view('annonce.detail', compact('detailannonce', 'annonce'));

}


}
