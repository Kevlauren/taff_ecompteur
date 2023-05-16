<?php

namespace App\Http\Controllers;

use App\Models\Demandeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreDemandeurRequest;
use App\Http\Requests\UpdateDemandeurRequest;

class DemandeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandeurs = Demandeur::all();

        if (Auth::check()) {
            if (Auth::user()->is_admin == 1) {
                
                return view('admin.demandeur.index', compact('demandeurs')); 
            }else {
                
                return view('agentsbee.demandeurs.index', compact('demandeurs'));
            }
        }




        // return view('admin.demandeur.index', compact('demandeurs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demandeur  $demandeur
     * @return \Illuminate\Http\Response
     */
    public function show(Demandeur $demandeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demandeur  $demandeur
     * @return \Illuminate\Http\Response
     */
    public function edit(Demandeur $demandeur)
    {
        return view('admin.demandeur.edit', compact('demandeur')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Demandeur  $demandeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demandeur $demandeur)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'contact' => 'required',
            'localite' => 'required',
            
        ]);

        $demandeur->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'contact' => $request->contact,
            'localite' => $request->localite,         


        ]);

        return redirect()->route('admin.demandeur.index')->with('success', 'Modification effectué avec succès');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demandeur  $demandeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demandeur $demandeur)
    {
        //
    }
}
