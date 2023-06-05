<?php

namespace App\Http\Controllers;

use App\Models\Demandeur;
use App\Models\Demande;
use App\Notifications\NotifyUserOnRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class SendingController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('file')) {
            $destination_path = 'public/images/cip';
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $path = $request->file('file')->storeAs($destination_path,$fileName);

            $input['file'] = $fileName;

        }
        $demandeur = Demandeur::create($input);

        $demande = $demandeur->demande()->create([
            'no_demande' => substr(bin2hex(random_bytes(9)), 0, 12)
        ]);

        $data = $request->all();

        if ($data) {

            // Here we notify the use with a mail that hold the demand number

            $demandeur->notify(new NotifyUserOnRequest($demande->no_demande));

            Alert::success('Félicitations', 'Votre demande a été enregistrée avec succès');
            return back();
        } else {
            Alert::error('Echèc', 'Echèc de l\enregistrement');
            return back();
        }
    }
}
