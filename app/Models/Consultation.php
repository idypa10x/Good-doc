<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $guarded = [];
    public function medecin()
    {
        return $this->belongsTo(User::class, 'medecin_id');
    }
    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
}
