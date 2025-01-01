<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi_temps extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name_fichier',
        'debut',
        'fin',
        'file_path'
    ];
}
