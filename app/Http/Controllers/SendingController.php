<?php

namespace App\Http\Controllers;

use App\Models\Demandeur;
use App\Models\Demande;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class SendingController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        //  récupérer les données du formulaire
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');
        $contact = $request->input('contact');
        $reseau = $request->input('localite');
        $longitude = $request->input('longitude');
        $latitude = $request->input('latitude');
        $file = $request->file('cip');

        $destination_path = 'public/images/uploads';
        $fileName = time() . '_' . $file->getClientOriginalName();
        // $filePath = $file->storeAs('uploads', $fileName, 'public');
        $filePath = $request->file('cip')->storeAs($destination_path, $fileName);

        //  Insérer les données dans la base de données
        DB::table('demandeurs')->insert([
            'nom' => $nom,  
            'prenom' => $prenom,
            'email' => $email,
            'contact' => $contact,
            'localite' => $reseau,
            'longitude' => $longitude,
            'latitude' => $latitude,
            'file_path' => $fileName,
        ]);

        $data = $request->all();

        if ($data) {
            Alert::success('Félicitations', 'Votre demande a été enregistrée avec succès');
            return back();
        } else {
            Alert::error('Echèc', 'Echèc de l\enregistrement');
            return back();
        }
    }
}

