<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stagiaires extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cin',
        'nom',
        'sexe',
        'adresse',
        'tel',
        'email',
        'nom_utilisateur',
        'password',
        'isenabled',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
