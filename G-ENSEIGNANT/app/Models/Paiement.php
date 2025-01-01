<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    // Si votre table 'paiements' a des colonnes spécifiques, vous pouvez spécifier les champs remplissables
    protected $fillable = [
        'filiere_niveau', // Exemple de colonne
        'cours',          // Exemple de colonne
        'nbre_heures',    // Exemple de colonne
        'montant_heure',  // Exemple de colonne
        'montant_total',  // Exemple de colonne
        'id_professeur',  // La clé étrangère liée à l'utilisateur (professeur)
    ];

    /**
     * Relation : Un paiement appartient à un utilisateur.
     */
    // public function professeur()
    // {
    //     return $this->belongsTo(User::class, 'id_professeur'); // 'id_professeur' est la clé étrangère
    // }


    public function professeur()
{
    return $this->belongsTo(Professeur::class, 'id_professeur');
}


}
