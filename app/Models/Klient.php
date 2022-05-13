<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klient extends Model
{
    use HasFactory;

    protected $fillable = array(
        'imie_klienta',
        'nazwisko_klienta',
        'nr_tel_klienta',
        'email_klienta',
        'role',
        'haslo_klient',
    );

    protected $hidden = [
        'haslo_klient',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
