<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class OffreController extends Controller
{
    public function index() {
        $query =  Entreprise::where('user_id',Auth::user()->id)->first();
    if($query==null){
        Alert::toast('Aucune entreprise enregistrée ','warning');
        return redirect()->route('entreprise.register.form');
    }else{
        return view('dashboard.profile.entreprise.offre.form');
    }

}
    public function store(Request $request){


        Validator::make($request->input(),[
            'name'=>["required","string"],
            'description'=>["required","string"],
            'price'=>["required"],
            'statut'=>["required"],
        ])->validate();
    $query = Entreprise::where('user_id',Auth::user()->id)->first();

    $offre = new Offre();
    $offre->name  = $request->input('name');
    $offre->statut = $request->input('statut');
    $offre->description = $request->input('description');
    $offre->price = $request->input(('price'));
    $offre->entreprise_id = $query->id ;

    if($request->hasFile('image')) {
        $file = $request->file('image');
        $extention  = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('offert/images/', $filename);
        $offre->image = $filename;
     }
     $offre->save();
     Alert::success('Enregistrement','Ajouter avec succès');
     return redirect()->route('liste.offert');

    // $crete= Offre::create([
    // 'name'=>  $request->input('name'),
    // 'statut'=>  $request->input('statut'),
    // 'description'=>$request->input('description'),
    // 'price'=>  $request->input('price'),
    // 'entreprise_id'=> $query->id,
    // 'image'=>$filename
    // ]);
    }


    public function liste_offre() {
    $query =  Entreprise::where('user_id',Auth::user()->id)->first();

    if($query==null){

    Alert::toast('Aucune entreprise enregistrée ','warning');
        return redirect()->route('entreprise.register.form');
    }else{

        $liste =  Offre::where('entreprise_id',$query->id)->get();

        return view('dashboard.profile.entreprise.offre.liste',compact('liste'));
    }

    }


    public function delete($id){

        Offre::find($id)->delete();
        Alert::info('Suppression','supprimer avec succès');
        return redirect()->route('liste.offert');

    }

    public function edit(Request $request, $id) {

    $update_offert= Offre::find($id);

    $update_offert->name = $request->input('name');
    $update_offert->statut = $request->input('statut');
    $update_offert->description = $request->input('description');
    $update_offert->price = $request->input('price');

    $update_offert->update();
    Alert::success('Enregistrement','Modifier avec succès');
     return redirect()->route('liste.offert');
}


public function seller_see_orfers(){

    $offres = Offre::orderBYDESC('created_at')->paginate(10);

    return view('dashboard.profile.seller.offers',compact('offres'));

   }

   public function seller_see_orfers_detail($id){

    $offre = Offre::where('id', $id)->first();

    return view('dashboard.profile.seller.detail_offer',compact('offre'));

   }

}
