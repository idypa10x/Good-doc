<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $medecins = User::role('medecin')->get();
            return response()->json($medecins);
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
               'nom' => 'required',
               'prenom' => 'required',
               'email' => 'required',
               'telephone' => 'required',
               'adresse' => 'required',
               'datenaiss' => 'required',
               'lieunaiss' => 'required',
               'situationmatrimoniale' => 'required',
               'profession' => 'required',
               'religion' => 'required',
               'service_id' => 'required',
               'password' => 'required'
           ]);
           $medecin =new User();
           $medecin->nom = $request->nom;
           $medecin->prenom = $request->prenom;
           $medecin->email = $request->email;
           $medecin->telephone = $request->telephone;
           $medecin->adresse = $request->adresse;
           $medecin->datenaiss = $request->datenaiss;
           $medecin->lieunaiss = $request->lieunaiss;
           $medecin->situationmatrimoniale = $request->situationmatrimoniale;
           $medecin->profession = $request->profession;
           $medecin->religion = $request->religion;
           $medecin->service_id = $request->service_id;
           $medecin->password =Hash::make($request->password);
           $medecin->assignRole('medecin');
           $medecin->save();
            return response()->json($medecin, 201);
        }catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $medecin = User::find($id);
            return response()->json($medecin);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $medecin = User::find($id);
            $medecin->delete();
            return response()->json(['message' => 'Medecin deleted successfully'], 204);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
