<?php

namespace App\Http\Controllers;

use App\Models\Visite;
use App\Models\Demandeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalendrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $events = array();

    //     foreach ($visites as $visite) {
    //         $events[] = [
    //             'nom' => $visite->demandeur->nom,
    //             'start' => $visite->start_time,
    //             // 'url'   => route('agentsbee.visites.edit', $visite->id),
    //         ];
    //     }

    //     $visites = Visite::with(['demandeur'])->get();

    //     foreach ($visites as $visite) {
    //         if (!$visite->start_time) {
    //             continue;
    //         }

    //         $events[] = [
    //             'title' => $visite->demandeur->nom ,
    //             'start' => $visite->start_time,
    //             'end' => $visite->finish_time,
    //             'url'   => route('agentsbee.visites.edit', $visite->id),
    //         ];
    //     }

    //     return view('agentsbee.calendrier.index', ['events' => $events]);
    // }

    public function index(Request $request)
    {
        $events = array();

        $visites = Visite::all();
        $demandeurs = DB::select('select * from demandeurs');
       
        foreach ($visites as $visite) {
            $events[] = [
                'start' => $visite->start_time,
                // 'end' => $visite->finish_time,
                'nom' =>$visite->demandeur->nom,
                'prenom' =>$visite->demandeur->prenom,

            ];
        }
        return view('agentsbee.calendrier.index', ['events' => $events, 'demandeurs' => $demandeurs]);

        // if ($request->ajax()) {

        //     $data = Visite::whereDate('start', '>=', $request->start_time)
        //         ->whereDate('end',   '<=', $request->finish_time)
        //         ->get(['id', 'start', 'end']);

        //     return response()->json($data);
        // }

        // return view('agentsbee.calendrier.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    //     public function ajax(Request $request)
    //     {

    //         switch ($request->type) {
    //             case 'add':
    //                 $event = Visite::create([
    //                     'title' => $request->id,
    //                     'start' => $request->start_time,
    //                     'end' => $request->finish_time,
    //                 ]);

    //                 return response()->json($event);
    //                 break;

    //             case 'update':
    //                 $event = Visite::find($request->id)->update([
    //                     'title' => $request->id,
    //                     'start' => $request->start_time,
    //                     'end' => $request->finish_time,
    //                 ]);

    //                 return response()->json($event);
    //                 break;

    //             case 'delete':
    //                 $event = Visite::find($request->id)->delete();

    //                 return response()->json($event);
    //                 break;

    //             default:
    //                 # code...
    //                 break;
    //         }
    //     }

    public function store(Request $request)
    {
        return $request->all();
    }
}
