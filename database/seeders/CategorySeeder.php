<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name'=> 'Vente de matériel informatique'] ,
            ['name'=> 'Alimentation'] ,
            ['name'=> 'Électroménager'] ,
            ['name'=> 'Beauté et Parfumerie'] ,
            ['name'=> 'Meuble'] ,
            ['name'=> 'Automobile'] ,
            ['name'=> 'Pièces Automobiles'] ,
            ['name'=> 'Projet Informatique divers'] ,
            ['name'=> 'Bierre'],
            ['name'=> 'Telivision'],
            ['name'=> 'Boisson africaine'],
            ['name'=> 'Telephone & tablette'],
            ['name'=> 'Ordinateur Portable'],
            ['name'=> 'Equipements'],
            ['name'=> 'Mode Femme'],
            ['name'=> 'Electroniques'],
            ['name'=> 'Vetements Africains'],
            ['name'=> 'Decodeur'],
            ['name'=> 'Mode Africaine'],
            ['name'=> 'Maquillage'],
            ['name'=> 'Sac'],
            ['name'=> 'Camera Digitale'],
            ['name'=> 'Climatiseur'],
            ['name'=> 'Maison et Meuble'],
            ['name'=> 'Imprimantes'],
            ['name'=> 'Mode Homme'],
            ['name'=> 'Agriculture'],

        ]);
    }
}
