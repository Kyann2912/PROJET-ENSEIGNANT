<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenoms',
        'email',
        'contact',
        'role',
        'password',
    ];

    //relation avec le modèle professeur
    public function professeur(){
        return $this->hasOne(Professeur :: class);
    }



    //relation avec le modèle administrateur
    public function administrateur(){
        return $this->hasOne(Administrateur :: class);
    }

    //recupérer les admin

    public function isAdmin(){
        return $this->role === 'admin';
    }

    public function isProfesseur(){
        return $this->role === 'professeur';
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class, 'id_professeur'); // Assurez-vous que 'id_professeur' correspond bien à la clé étrangère dans la table 'paiements'.
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
