<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pojazd extends Model
{
    use HasFactory;

    protected $fillable = array(
        'marka',
        'nazwisko_kuriera',
        'model',
        'nr_rejestracyjny',
    );
}
