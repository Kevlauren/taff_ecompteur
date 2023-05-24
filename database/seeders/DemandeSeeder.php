<?php

namespace Database\Seeders;

use App\Models\Demandeur;
use Illuminate\Database\Seeder;

class DemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $demandeur = Demandeur::factory()->create();

        $demandeur->demande()->create();

    }
}
