<?php

namespace Database\Seeders;

use App\Models\Reseau;
use Database\Factories\ReseauFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class reseauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locality = Reseau::factory()->times(10)->create();
    }
}
