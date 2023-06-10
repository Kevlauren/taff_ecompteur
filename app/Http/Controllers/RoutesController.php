<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{

    public function pay_vue($demande_id)
    {
        return view('payment')->with([
            'fee' => 10000,
            'callback' => route('fees.pay.success',['demande_id' => $demande_id])
        ]);
    }

    public function success_processing(Request $request)
    {

        dd($request);

        return "Paiement réussi";

    }

}
