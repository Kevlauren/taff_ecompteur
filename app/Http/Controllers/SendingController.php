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

        if ($request->hasFile('file')) {
            $destination_path = 'public/images/cip';
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $path = $request->file('file')->storeAs($destination_path,$fileName);

            $input['file'] = $fileName;
            
        }
        $demandeur = Demandeur::create($input);

        $demandeur->demande()->create();

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
