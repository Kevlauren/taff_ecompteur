<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandeurs', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('reseau_id')->constrained();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('contact');
            $table->string('localite');           
            $table->string('longitude');
            $table->string('latitude');
            // $table->string('file');
           
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
        Schema::dropIfExists('demandeurs');
    }
}
