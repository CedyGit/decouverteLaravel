<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    use HasFactory;

    protected $fillable = [
        'demandeur',
        'poste_occuper',
        'date_de_debut',       
        'heure_de_debut',     
        'date_de_fin',       
        'heure_de_fin',       
        'nombre_de_jours',    
        'motifs',       

        'employe_id' ,
    ];

    public function employe()
    { 
        return $this->belongsTo(Employe::class);
    }
}
