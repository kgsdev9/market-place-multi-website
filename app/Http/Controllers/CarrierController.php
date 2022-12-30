<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Carrier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class CarrierController extends Controller
{
    //

    public function register(){
        $carrier = Carrier::where('id',Auth::user()->owner_id)->first();

        if($carrier==null){
          return view('dashboard.profile.carrier.create');
        }else{
          return view('dashboard.profile.carrier.update',compact('carrier'));
        }
   }



   public function create(Request $request){
    $inputs = $request->input();


    Validator::make($inputs, [
        'sirname' => [ 'string', 'max:255'],
        'firstname' => [ 'string', 'max:255'],
        'phonenumber' => [ 'string', 'max:255'],
        'address_payment' => [ 'string', 'max:255'],
        'seller_phonenumber' => [ 'string', 'max:255'],
    ])->validate();

    Validator::make($request->file(), [
        'kibs'=>['image'],
        'logo'=>['image'],
    ])->validate();


    if($request->hasFile('kibs')) {
        $file = $request->file('kibs');
        $kibspath= time(). '_'. $file->getClientOriginalName();
        $file->move(\public_path("carrier/images/kibs"), $kibspath);

    }

    if($request->hasFile('logo')) {
        $file = $request->file('logo');
        $logopath= time(). '_'. $file->getClientOriginalName();
        $file->move(\public_path("carrier/images/logo"), $logopath);

    }


    $carrier = Carrier::create([
        'sirname'=>$inputs['sirname'],
        'firstname'=>$inputs['firstname'],
        'phonenumber'=>$inputs['phonenumber'],
        'address_payment'=>$inputs['address_payment'],
        'website'=>$inputs['website'],
        'seller_phonenumber'=>$inputs['seller_phonenumber'],
        'kibs'=>$kibspath,
        'logo'=>$logopath,
    ]);


    DB::table('users')
    ->where('id','=',Auth::user()->id)
    ->update(['owner_id'=>$carrier->id]);

    // User::where('id',Auth::user()->id)->update(['owner_id'=>$seller->id]);

       $msg= " Félicitation votre  Inscription en tant que transporteur est terminée  ";

       Alert::success('Inscription transporteur', $msg);

       return  redirect()->route('dashboard');

   }



   public function update(Request $request){

    $inputs = $request->input();


    Validator::make($inputs, [
        'sirname' => ['string', 'max:255'],
        'firstname' => ['string', 'max:255'],
        'phonenumber' => ['string', 'max:255'],
        'address_payment' => ['string', 'max:255'],
        'seller_phonenumber' => ['string', 'max:255'],
    ])->validate();

    Validator::make($request->file(), [
        'kibs'=>['image'],
        'logo'=>['image'],
    ])->validate();


    $carrier = Carrier::where('id',Auth::user()->owner_id)->first();

    if($request->hasFile('kibs')) {
        $file = $request->file('kibs');
        $kibspath= time(). '_'. $file->getClientOriginalName();
        $file->move(\public_path("carrier/images/kibs"), $kibspath);

    }else{
        $kibspath = $carrier->kibs;
    }

    if($request->hasFile('logo')) {
        $file = $request->file('logo');
        $logopath= time(). '_'. $file->getClientOriginalName();
        $file->move(\public_path("carrier/images/logo"), $logopath);

    }else{
        $logopath = $carrier->logo;
    }


    $carrier = Carrier::where('id',$carrier->id)->update([
        'sirname'=>$inputs['sirname'],
        'firstname'=>$inputs['firstname'],
        'phonenumber'=>$inputs['phonenumber'],
        'address_payment'=>$inputs['address_payment'],
        'website'=>$inputs['website'],
        'seller_phonenumber'=>$inputs['seller_phonenumber'],
        'kibs'=>$kibspath,
        'logo'=>$logopath,
    ]);




       $msg= " Modifier avec succès ";
       Alert::toast($msg,'success');
       return  redirect()->back();

   }


}
