<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tecnology', function (Blueprint $table) {

            /* Crea la colonna con un intero chiamato POST_ID */
            $table->unsignedBigInteger('post_id');
            /* Creo la foreign key che prende il valore da post */
            $table->foreign('post_id')->references('id')->on('posts');
            /* Crea la colonna con un intero chiamato TECNOLOGY_ID */
            $table->unsignedBigInteger('tecnology_id');
            /* Creo la foreign key che prende il valore da tecnologies */
            $table->foreign('tecnology_id')->references('id')->on('tecnologies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tecnology');
    }
};
