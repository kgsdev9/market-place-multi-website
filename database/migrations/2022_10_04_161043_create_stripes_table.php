<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStripesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stripes', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->text('adresse_delivry')->nullable();
            $table->string('country_delivry')->nullable();
            $table->string('city_delivry')->nullable();
            $table->integer('phone')->nullable();
            $table->string('quantity')->nullable();
            $table->boolean('payement_status')->default(false)->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('code');
            $table->foreign('user_id')->references('id')->on('users')->nullable();
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
        Schema::dropIfExists('stripes');
    }
}
