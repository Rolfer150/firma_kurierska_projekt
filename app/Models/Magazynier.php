<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazynier extends Model
{
    use HasFactory;

    protected $fillable = array(
        'imie_magazyniera',
        'nazwisko_magazyniera',
        'nr_tel_magazyniera',
        'email_magazyniera',
        'role',
        'haslo_magazynier',
    );

    protected $hidden = [
        'haslo_magazynier',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at_magazynier' => 'datetime',
    ];
}
