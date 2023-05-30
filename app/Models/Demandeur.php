<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'email',
        'contact',
        'localite',
        'longitude',
        'latitude',
        'file',

    ];


    public function demande(){
    // return $this->belongsTo('Model', 'foreign_key', 'owner_key'); 
        return $this->hasMany(Demande::class);

    }

}
