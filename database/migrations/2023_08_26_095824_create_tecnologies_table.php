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
        Schema::create('tecnologies', function (Blueprint $table) {
            /* Definisco le colonne della tabella tecnology */
            $table->id();
            /* Faccio in modo che il tag sia univoco e non ce ne siano due uguali */
            $table->string('name', 50)->unique();
            $table->string('slug', 75);
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
        Schema::dropIfExists('tecnologies');
    }
};
