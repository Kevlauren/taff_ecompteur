<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'contact',
        'localite',
        'file_path',

    ];


    public function demandeur()
    {
       // return $this->belongsTo('Model', 'foreign_key', 'owner_key'); 
       return $this->belongsTo('App\Models\Reseau', 'reseau_id', 'id');
    }

}
