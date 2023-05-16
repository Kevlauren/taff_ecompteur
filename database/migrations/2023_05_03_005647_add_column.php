<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('demandeurs', function(Blueprint $table){
            $table->date('dateNaissance');
            $table->float('longitude');
            $table->float('latitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // $table->dropColumn('dateNaissance');
        // $table->dropColumn('longitude');
        // $table->dropColumn('latitude');
    }
}
