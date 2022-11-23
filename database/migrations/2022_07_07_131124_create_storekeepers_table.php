<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorekeepersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storekeepers', function (Blueprint $table) {
            $table->id();
            $table->string('sirname');
            $table->string('firstname');
            $table->string('phonenumber');
            $table->string('address_payment');
            $table->string('website')->nullable();
            $table->string('seller_phonenumber');
            $table->string('kibs');
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storekeepers');
    }
}
