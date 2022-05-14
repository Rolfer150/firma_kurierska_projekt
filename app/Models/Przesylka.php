<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Przesylka extends Model
{
    use HasFactory;

    protected $fillable = array(
        'rodzaj_platnosci',
        'cena',
        'rodzaj_przesylki',
        'data_dostarczenia',
    );

    protected $hidden = [
        'remember_token',
    ];
}
