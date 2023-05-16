<?php

namespace App\Http\Controllers;

use App\Models\Visite;
use App\Models\Demandeur;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVisiteRequest;
use App\Http\Requests\UpdateVisiteRequest;

class VisiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visites = Visite::all();
        return view('agentsbee.visites.index', compact('visites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $demandeurs = Demandeur::all();
        return view('agentsbee.visites.create', compact('demandeurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVisiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Visite::create([
            'idDemandeur' => $request->demandeur_id,
            'start' => $request->start_time,
            'finish' => $request->finish_time,
            'comments' => $request->comments
        ]);
        // $visite->services()->sync($request->input('services', []));

        return redirect()->route('agentsbee.visites.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function show(Visite $visite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function edit(Visite $visite)
    {
        return view('agentsbee.visites.edit', compact('visite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVisiteRequest  $request
     * @param  \App\Models\Visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVisiteRequest $request, Visite $visite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visite $visite)
    {
        $visite->delete();
        return redirect()->route('agentsbee.visites.index');
    }
}
