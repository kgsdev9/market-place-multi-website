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
            $table->string('statut');
            $table->text('description');
            $table->float('price');
            $table->string('cover_image');
            $table->tinyInteger('popular')->nullable();
            $table->tinyInteger('tendance')->nullable();
            $table->string('referencies')->nullable();
            $table->integer('quantity');
            $table->string('tag')->nullable();
            $table->string('sku_product')->nullable();
            $table->float('high_price')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('city_id')->on('cities')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('country_id')->on('countries')->references('id')->onUpdate('cascade') ->onDelete('cascade');
            $table->timestamps();
            $table->foreign('category_id')->on('categories')->references('id') ->onUpdate('cascade')
            ->onDelete('cascade');
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
