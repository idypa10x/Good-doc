<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    protected $table = 'rendez_vouses';
    protected  $guarded = [];

    public function medecin(){
        return $this->belongsTo(User::class, 'medecin_id');
    }
    public function patient(){
        return $this->belongsTo(User::class, 'patient_id');
    }
    public function consultation()
    {
        return $this->hasMany(Consultation::class);

    }
}
