<?php

use App\Models\User;
use App\Models\Demandeur;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('demandeur_id'); 

            $table->string('nom');
            
            $table->string('prenom');
            
            $table->foreign('demandeur_id')->references('id')->on('demandeurs');
            
            $table->timestamps();

           


            // $table->foreignIdFor(User::class);
            // $table->foreignIdFor(Demandeur::class);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
        
    }
}
