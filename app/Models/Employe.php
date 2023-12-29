<?php

namespace App\Models;

use App\Models\Conge;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    public function conges()
    {
        return $this->hasMany(Conge::class); 
    }
    
}
