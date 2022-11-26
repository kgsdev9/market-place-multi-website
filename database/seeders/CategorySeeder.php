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
        ]);
    }
}
