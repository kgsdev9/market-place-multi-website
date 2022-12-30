<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ContryAndCityController extends Controller
{
     public function indexCountry() {
        $country = Country::orderBy('name')->paginate(10);
        return view('admin.countryandcity.country.index',compact('country'));
     }

     public function store(Request $request) {
        $data  = $request->input();
        Validator::make($data,[
            'name'=>["required","string"],
        ])->validate();

        Country::create([
            'name'  => $data['name']
        ]);

        Alert::success('Success', 'Informations  Ajoutes avec succès');
        return redirect()->route('country.index');

     }

     public function create() {
        return view('admin.countryandcity.country.add');
     }

     public function edit($id) {
        $edit = Country::find($id);
        return view('admin.countryandcity.country.edit', compact('edit'));
     }



     public function destroy($id)  {
        $destroy = Country::find($id);
        $destroy->delete();
        return redirect()->back();
     }

     public function update(Request $request ,  $id)  {
        $update = Country::find($id);
        $update->name = $request->input('name');
        $update->update();
        Alert::success('Success', 'Information   Modifiée avec succès');
        return redirect()->route('country.index');
     }




     public function indexCity() {
        $city = City::orderBy('name')->paginate(10);
        return view('admin.countryandcity.city.index', compact('city'));
     }


     public function create_city() {
        return view('admin.countryandcity.city.add');
     }



     public function store_city(Request $request) {
        $data  = $request->input();
        Validator::make($data,[
            'name'=>["required","string"],
        ])->validate();

        City::create([
            'name'  => $data['name']
        ]);

        return redirect()->route('city.index');

     }



     public function edit_city($id) {
        $edit = City::find($id);
        return view('admin.countryandcity.city.edit', compact('edit'));
     }




     public function update_city(Request $request ,  $id)  {
        $update = City::find($id);
        $update->name = $request->input('name');
        $update->update();
        return redirect()->route('city.index');
     }


     public function destroy_city($id)  {
        $destroy = City::find($id);
        $destroy->delete();
        return redirect()->back();
     }

}
