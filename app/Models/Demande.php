<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'nom',
        'prenom',
        'contact',
        'localite',
    ];

    public static function boot(){
        parent::boot();
        self::creating(function($demande){
            $demande->user()->associate(auth()->user()->id);
            $demande->demandeur()->associate(request()->id);

        });
    }

    public function demandeur(){
        return $this->belongsTo(Demandeur::class);

    }

    public function user(){
        return $this->hasMany(User::class);

    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                            