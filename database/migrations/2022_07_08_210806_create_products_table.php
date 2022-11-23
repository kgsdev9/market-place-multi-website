<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('statut');
            $table->text('description');
            $table->float('price');
            $table->string('cover_image');
            $table->tinyInteger('popular')->nullable();
            $table->tinyInteger('tendance')->nullable();
            $table->string('referencies')->nullable();
            $table->unsignedInteger('quantity');
            $table->float('high_price')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->on('categories')->references('id') ->onUpdate('cascade')
            ->onDelete('cascade');;
            $table->foreign('seller_id')->on('sellers')->references('id') ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
