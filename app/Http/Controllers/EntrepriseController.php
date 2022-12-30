<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class EntrepriseController extends Controller
{
    //


    public function form(){

        $entreprise = Entreprise::where('user_id',Auth::user()->id)->first();

        if(empty($entreprise)){
            return view('dashboard.profile.entreprise.register');
        }else{

            return  redirect()->route('detail.entreprise', Auth::user()->id);
        }

    }



    public function store(Request $request){

        Validator::make($request->input(),[
            'name'=>["required","string"],
            'description'=>["required","string"],
            'website'=>["string"],
        ])->validate();


        if($request->hasFile('image')) {
            $file = $request->file('image');
            $imagepath= time(). '_'. $file->getClientOriginalName();
            $file->move(\public_path("Entreprise/images"), $imagepath);

        }

        $entreprise = Entreprise::create([
            'name'=>$request->input('name'),
            'description'=>$request->input('name'),
            'website'=>$request->input('name'),
            'image'=>$imagepath,
            'user_id'=>Auth::user()->id
        ]);

        Alert::success('Enregistrement', 'Entreprise enregistrée avec succès');

        return  redirect()->route('detail.entreprise', Auth::user()->id);
    }



public function detail_entreprise(){


    $detail_entreprise = Entreprise::where('user_id', Auth::user()->id)->first();

    if($detail_entreprise==null){

        Alert::toast('Aucune entreprise enregistrée ','warning');
        return redirect()->route('entreprise.register.form');
    }else{
        return  view('dashboard.profile.entreprise.describe', compact('detail_entreprise'));

    }


}


public function edit_entreprise(Request $request){



    Validator::make($request->input(),[
        'name'=>["required","string"],
        'description'=>["required","string"],
        'website'=>["string"],
    ])->validate();


    if($request->hasFile('image')) {
        $file = $request->file('image');
        $imagepath= time(). '_'. $file->getClientOriginalName();
        $file->move(\public_path("Entreprise/images"), $imagepath);

        $entreprise = Entreprise::where('user_id', Auth::user()->id)->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('name'),
            'website'=>$request->input('name'),
            'image'=>$imagepath,

        ]);
    }else{

        $entreprise = Entreprise::where('user_id', Auth::user()->id)->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'website'=>$request->input('website'),
        ]);
    }


    Alert::success('Modification', 'Informations  Modifiées avec succès');

    return  redirect()->route('detail.entreprise', Auth::user()->id);
}






}
