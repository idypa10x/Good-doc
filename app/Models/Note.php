<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded = [];
    public function DossierMedical()
    {
        return $this->belongsTo(DossierMedical::class);
    }
    public function medecin()
    {
        return $this->belongsTo(User::class);
    }
}
