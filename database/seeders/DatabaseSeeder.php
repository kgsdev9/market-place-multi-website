<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(RoleSeeder::class);
        \App\Models\Country::factory(100)->create();
        \App\Models\City::factory(100)->create();
         \App\Models\User::factory(20)->create();
        \App\Models\Seller::factory(100)->create();
         \App\Models\Product::factory(100)->create();
        \App\Models\Annonce::factory(10)->create();
        //  \App\Models\Category::factory(10)->create();

    }
}
