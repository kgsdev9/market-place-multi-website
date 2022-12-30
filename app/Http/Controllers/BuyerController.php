<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class BuyerController extends Controller
{
    //


    public function register(){

        $buyer = Buyer::find(Auth::user()->owner_id);
        if($buyer==null){
            return view('dashboard.profile.buyer.create');
        }else{
            return view('dashboard.profile.buyer.updateprofile',compact('buyer'));
        };

   }


public function create(Request $request){


    Validator::make($request->input(), [
        'sirname' => [ 'string', 'max:255'],
        'firstname' => [ 'string', 'max:255'],
        'phonenumber' => [ 'string', 'max:255'],

    ])->validate();




$buyer = Buyer::create([
        'sirname'=>$request->input('sirname'),
        'firstname'=>$request->input('firstname'),
        'phonenumber' => $request->input('phonenumber')
    ]);



    DB::table('users')
    ->where('id','=',Auth::user()->id)
    ->update(['owner_id'=>$buyer->id]);



    $msg= " Félicitation votre  Inscription en tant que acheteur est terminée  ";

    Alert::success('Inscription acheteur', $msg);

    return  redirect()->route('profile');
}





public function update(Request $request){

    Validator::make($request->input(), [
        'sirname' => [ 'string', 'max:255'],
        'firstname' => [ 'string', 'max:255'],
        'phonenumber' => [ 'string', 'max:255'],

    ])->validate();


    $buyer= DB::table('buyers')->where('id','=',Auth::user()->owner_id)->first();

    Buyer::where('id',$buyer->id)->update([
        'sirname'=>$request->input('sirname'),
        'firstname'=>$request->input('firstname'),
        'phonenumber'=>$request->input('phonenumber'),

    ]);
   $msg= "Informations acheteur est modifié  ";

   Alert::success('Modifiication', $msg);

   return  redirect()->route('profile');




}



}
