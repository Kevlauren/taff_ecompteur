<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function index()
    {
        $demandes = Demande::all();
        return view('agentsbee.devis.index', compact('demandes'));

    }
}
