<?php

namespace App\Http\Controllers;

use App\Models\RendezVous;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $rendezVous = RendezVous::where('statut', 'en attente')->get();
            return response()->json($rendezVous);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'date' => 'required',
                'heure' => 'required',
                'motif' => 'required',
                'patient_id' => 'required',
                'medecin_id' => 'required',
            ]);
            $rendezVous = new RendezVous();
            $rendezVous->date = $request->date;
            $rendezVous->heure = $request->heure;
            $rendezVous->motif = $request->motif;
            $rendezVous->patient_id = $request->patient_id;
            $rendezVous->medecin_id = $request->medecin_id;
            $rendezVous->save();
            return response()->json($rendezVous, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RendezVous $rendezVous)
    {
        try {
            return response()->json($rendezVous);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RendezVous $rendezVous)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RendezVous $rendezVous)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RendezVous $rendezVous)
    {
        try {
            $rendezVous->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
