<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dane_przesylki extends Model
{
    use HasFactory;

    protected $fillable = array(
        'dlugosc',
        'produkt_dostepny_w_magazynie',
        'rodzaj_produktu',
        'szerokosc',
        'waga',
        'wysokosc',
    );
}
