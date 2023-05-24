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

        // on crée un demandeur à partir d'une factory et l'opération renvoie une instance du demandeur

        $demandeur = Demandeur::factory()->create();

        /*

            On récupère cette instance et on appelle la fonction demande sur cet objet
            qui fait référence à la classe des demandes qui implémente la fontion create()

            On a pas besoin de spécifier l'id du demandeur, vu que cette information est
            transmise entre les objets et il existe à la base. Mais si on avait des champs
            supplémentaires, on aurait préciser unique les champs qui restent, sauf l'id


        */

        $demandeur->demande()->create();

    }
}
