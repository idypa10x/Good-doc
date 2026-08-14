<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DossierMedical extends Model
{
    protected $table = 'dossier_medicals';
    protected $guarded = [];
    public function patient()
    {
        return $this->belongsTo(User::class);
    }
}
