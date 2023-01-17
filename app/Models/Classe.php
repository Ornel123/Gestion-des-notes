<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = [
        "code",
        "intitule",
        "filiere_id",
        "niveau_id",
    ];

    public function etudiants()
    {
        $this->hasMany(Etudiant::class);
    
    }

    public function filiere()
    {
        $this->belongsTo(Filiere::class)->first();
    
    }

    public function niveaux()
    {
        $this->belongsTo(Niveau::class);
    
    }

    
}
