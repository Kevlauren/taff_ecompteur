<?php

namespace App\Http\Controllers;

use App\Models\Demandeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        // $demandeurs = DB::select('select count(id) from demandeurs');
        $demandeurs = DB::table('demandeurs')->count();
        return view('agentsbee.dashboard', ['demandeurs'=>$demandeurs]);
    }
}
