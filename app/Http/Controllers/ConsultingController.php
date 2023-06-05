<?php

namespace App\Http\Controllers;
use App\Models\Reseau;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ConsultingController extends Controller
{
    public function consult()
    {
         return view('consulting');
    }

    public function GetDemand(Request $request)
    {

        try {

            $request->validate(['no_demande' => 'required']);

        } catch (\Throwable $th) {

            Alert::error('Erreur','Veuillez entrer le code de votre demande');

            return redirect()->back();

        }



    }

}
