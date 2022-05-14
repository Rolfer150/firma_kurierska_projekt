<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klient extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = [
=======
    protected $fillable = array(
>>>>>>> main
        'imie_klienta',
        'nazwisko_klienta',
        'nr_tel_klienta',
        'email_klienta',
<<<<<<< HEAD
        'haslo_klient',
    ];
=======
        'role',
        'haslo_klient',
    );
>>>>>>> main

    protected $hidden = [
        'haslo_klient',
        'remember_token',
    ];

    protected $casts = [
<<<<<<< HEAD
        'email_verified_at_klient' => 'datetime',
=======
        'email_verified_at' => 'datetime',
>>>>>>> main
    ];
}
