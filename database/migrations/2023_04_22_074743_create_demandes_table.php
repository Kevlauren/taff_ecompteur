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

            $table->foreignId('demandeur_id');
            $table->foreign('demandeur_id')
                ->references('id')
                ->on('demandeurs')
                ->onDelete('cascade');
            // $table->foreignIdFor(Demandeur::class)->nullable()->constrained();

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
        Schema::dropIfExists('demandes');

    }
}
