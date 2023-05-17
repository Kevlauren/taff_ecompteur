<?php

namespace App\Http\Controllers;
use App\Models\Reseau;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $reseaus = Reseau::all();
        return view('form', compact('reseaus'));
    }
     
}
