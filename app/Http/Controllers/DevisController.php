<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Demandeur;
use App\Notifications\DevisNotification;
use Illuminate\Http\Request;

use Kkiapay\Kkiapay;

class DevisController extends Controller
{

    public $path = 'uploads/devis/';

    public $default_fee = 10000;

    public function send_notice(Request $request)
    {

        // $request->validate([]);

        $name = null;

        if($request->hasFile('devis'))
        {

            $file = $request->file('devis');

            $ext = $file->getClientOriginalExtension();

            $name = md5($file->getClientOriginalName() . now()) . '.' . $ext;

            // Here we upload

            $file->move(public_path($this->path),$name);

        }

        $demande = Demande::find($request->demande_id);

        $demande->update([
            'status' => 1
        ]);

        $link = route('fees.pay',[
            'demande_id' => $demande->no_demande
        ]);

        $demande->demandeur->notify(new DevisNotification(public_path($this->path) . $name,$link));

        return ;

    }

    public function make_payment()
    {

        $gateway = new Kkiapay(env('KKIA_PUBLIC'),env('KKIA_PRIVATE'),env('KKIA_SECRET'));

    }

}