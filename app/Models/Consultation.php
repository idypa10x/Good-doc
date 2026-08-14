<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $guarded = [];
    public function rendezvous()
    {
        return $this->belongsTo(RendezVous::class);
    }

}
