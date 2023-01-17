<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UE extends Model
{
    use HasFactory;
    protected $fillable = [
        "code",
        "intitule",
        "credit",
        "semestre",
        "ue_optionelle",
        "tp_optionel",
        "classe_id",
    ];

    public function notes()
    {
        $this->hasMany(Note::class);
    
    }

    public function classe()
    {
        $this->belongsTo(Classe::class);
    
    }

}
