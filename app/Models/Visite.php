<?php

namespace App\Models;

use App\Models\Demande;
use App\Models\Demandeur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visite extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'start_time', 'created_at', 'updated_at'];

    public function demandeur(){
        return $this->belongsTo(Demandeur::class);
    }

    public function demande(){
        return $this->belongsTo(Demande::class);
    }
}
