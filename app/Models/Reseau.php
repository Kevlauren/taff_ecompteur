<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseau extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'localite',
       
    ];


    public function demandeur(){
        return $this->hasMany('App\Models\Demandeur');
    }

}
