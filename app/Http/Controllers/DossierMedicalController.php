<?php

namespace App\Http\Controllers;

use App\Models\DossierMedical;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DossierMedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
                'patient_id' => 'required',
                'age' => 'required',
                'poids' => 'required',
                'taille' => 'required',
                'groupe_sanguin' => 'required',
                'allergie' => 'required',
                'diabete' => 'required',
                'hta' => 'required',
                'asthme' => 'required',
                'drepanocytose' => 'required',
                'hepatite' => 'required',
                'pathologie' => 'required',
                'alcool' => 'required',
                'tabac' => 'required',
                'sport' => 'required',
                'temps_de_sommeil' => 'required',
                'stress' => 'required',
                'alimentation' => 'required',
                'condition_de_vie' => 'required',
                'menopause' => 'required',
                'grossesse' => 'required',
                'allaitement' => 'required',
                'nombre_grosesse' => 'required',
                'nombre_enfant' => 'required',
                'accouchement_voiebasse' => 'required',
                'accouchement_cesarienne' => 'required',
                'avortement_provoquer' => 'required',
                'avortementspontanne' => 'required',
                'maladie_parentale' => 'required',
                'sexe' => 'required',
            ]);
            $dossierMedical = new DossierMedical();
            $dossierMedical->patient_id = $request->patient_id;
            $dossierMedical->age = $request->age;
            $dossierMedical->poids = $request->poids;
            $dossierMedical->taille = $request->taille;
            $dossierMedical->groupe_sanguin = $request->groupe_sanguin;
            $dossierMedical->allergie = $request->allergie;
            $dossierMedical->diabete = $request->diabete;
            $dossierMedical->hta = $request->hta;
            $dossierMedical->asthme = $request->asthme;
            $dossierMedical->drepanocytose = $request->drepanocytose;
            $dossierMedical->hepatite = $request->hepatite;
            $dossierMedical->pathologie = $request->pathologie;
            $dossierMedical->alcool = $request->alcool;
            $dossierMedical->tabac = $request->tabac;
            $dossierMedical->sport = $request->sport;
            $dossierMedical->temps_de_sommeil = $request->temps_de_sommeil;
            $dossierMedical->stress = $request->stress;
            $dossierMedical->alimentation = $request->alimentation;
            $dossierMedical->condition_de_vie = $request->condition_de_vie;
            $dossierMedical->menopause = $request->menopause;
            $dossierMedical->grossesse = $request->grossesse;
            $dossierMedical->allaitement = $request->allaitement;
            $dossierMedical->nombre_grosesse = $request->nombre_grosesse;
            $dossierMedical->nombre_enfant = $request->nombre_enfant;
            $dossierMedical->accouchement_voiebasse = $request->accouchement_voiebasse;
            $dossierMedical->accouchement_cesarienne = $request->accouchement_cesarienne;
            $dossierMedical->avortement_provoquer = $request->avortement_provoquer;
            $dossierMedical->avortementspontanne = $request->avortementspontanne;
            $dossierMedical->maladie_parentale = $request->maladie_parentale;
            $dossierMedical->sexe = $request->sexe;
            $dossierMedical->save();
            return response()->json($dossierMedical, 200);
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(DossierMedical $dossierMedical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DossierMedical $dossierMedical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DossierMedical $dossierMedical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DossierMedical $dossierMedical)
    {
        //
    }
}
