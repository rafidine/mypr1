<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'localite',
        'electeurs_code',
        'partie',
        'nom_photo',
        'rafi'
    
    ];
}
