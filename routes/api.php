<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DossierMedicalController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json([
        'message' => 'API GoodDoc fonctionne'
    ]);
});

Route::apiResource('/services', ServiceController::class);
Route::apiResource('/medecins', MedecinController::class);
Route::apiResource('/consultations', ConsultationController::class);
Route::apiResource('/rendezvous', RendezVousController::class);
Route::apiResource('/notes', NoteController::class);
Route::apiResource('dossiermedical', DossierMedicalController::class);
