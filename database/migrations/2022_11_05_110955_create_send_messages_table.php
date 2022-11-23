<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_messages', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->string('email');
            $table->string('number');

            $table->unsignedBigInteger('annonceur_id');
            $table->foreign('annonceur_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('repondeur_id');
            $table->foreign('repondeur_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('poste_id');
            $table->foreign('poste_id')->references('id')->on('annonces')->onDelete('cascade');
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
        Schema::dropIfExists('send_messages');
    }
}
