<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurier extends Model
{
    use HasFactory;

    protected $fillable = array(
        'imie_kuriera',
        'nazwisko_kuriera',
        'nr_tel_kuriera',
        'email_kuriera',
        'haslo_kurier',
    );

    protected $hidden = [
        'haslo_kurier',
        'remember_token',
    ];
}
