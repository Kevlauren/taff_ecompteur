<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    // protected $guarded = [
    // 'id',
    // 'nom',
    // 'prenom',
    // 'contact',
    // 'localite',];

    protected $fillable = [
        'id',
        'demandeur_id', 'no_demande','status'
    ];

    // public static function boot(){
    //     parent::boot();
    //     self::creating(function($demande){
    //         $demande->user()->associate(auth()->user()->id);
    //         $demande->demandeur()->associate(request()->id);

    //     });
    // }

    public function demandeur(){
        return $this->belongsTo(Demandeur::class,'demandeur_id');

    }

    public function user(){
        return $this->hasMany(User::class);

    }
}
