<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreDemandeRequest;
use App\Http\Requests\UpdateDemandeRequest;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandes = Demande::all();
        // return view('admin.demandes.index', compact('demandes'));
      
        if (Auth::check()) {
            if (Auth::user()->is_admin == 1) {
                
                return view('admin.demandes.index', compact('demandes')); 
            }else {
                
                return view('agentsbee.demandes.index', compact('demandes'));
            }
        }

    }

    public function downloadPdf(Demande $id)
    {
        // $demandes = DB::select('select * from demandes  where id = ?', [$id]);
        $demandes = DB::select('SELECT *
        FROM demandes, demandeurs
        WHERE demandeurs.id = demandes.demandeur_id
        AND demandes.id = 1;', [$id]);

        $pdf = PDF::loadView('agentsbee.demandes.pdf', compact('demandes'));

        return $pdf->download('Demande N°'.$id.'.pdf');
    }


    public function viewPdf($id){
        $demandes = DB::select('SELECT *
        FROM demandes, demandeurs
        WHERE demandeurs.id = demandes.demandeur_id
        AND demandes.id = ?;', [$id]);

        $pdf = PDF::loadView('agentsbee.demandes.pdf', compact('demandes'));

        return $pdf->stream();


    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agentsbee.demandes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $demande = Demande::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'localite' => $request->localite
        ]);

        return redirect()->route('admin.clients.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show(Demande $demande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit(Demande $demande)
    {
        return view('admin.demandes.edit', compact('demande')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demande $demande)
    {
        // $request->validate([
        //      'nom' => 'required',
        //      'prenom' => 'required',
        //      'role' => 'required'
        // ]);

        // $demande->update([
        //     'nom' => $request->nom,
        //     'prenom' => $request->prenom,
        //     'role' => $request->role

        // ]);

        return redirect()->route('admin.demandes.index')->with('success', 'Modification effectué avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demande $demande)
    {
        $demande->delete();
        return redirect()->route('admin.demandes.index');
    }

    public function massDestroy(Request $request)
    {
        Demande::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
