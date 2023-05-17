<?php

namespace App\Http\Controllers;
use App\Models\Reseau;
use Illuminate\Http\Request;

class ConsultingController extends Controller
{
    public function consult()
    {
         return view('consulting');
    }
     
}
