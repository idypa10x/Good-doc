<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $consultations = Consultation::all();
            //verfie s'il y a des consultations
            if ($consultations->isEmpty()) {
                return response()->json(['error' => 'Aucune consultation trouvée'], 404);
            }
            return response()->json($consultations);
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
           // $consultation = Consultation::create($request->all());
            $consultation=request()->validate(
                [
                    'date' => 'required',
                    'medecin_id' => 'required',
                    'patient_id' => 'required',
                    'diagnostic' => 'required',
                    'type' => 'required',
                ]

            );
            return response()->json($consultation, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Consultation $consultation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consultation $consultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consultation $consultation)
    {
        //
    }
}
