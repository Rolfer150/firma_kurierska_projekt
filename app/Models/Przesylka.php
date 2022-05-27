<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Przesylka extends Model
{
    use HasFactory;

    protected $fillable = array(
        'user_id',
        'platnosc_id',
        'dostawa_id',
        'wielkosc_id',
        'adres_id',
        'paczkomat_id',
        'cena',
        'data_dostarczenia',
        'kod_paczkomat'
    );

    protected $hidden = [
        'remember_token',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function platnosc(): BelongsTo
    {
        return $this->belongsTo(Rodzaj_platnosci::class);
    }

    public function dostawa(): BelongsTo
    {
        return $this->belongsTo(Rodzaj_dostawy::class);
    }

    public function wielkosc(): BelongsTo
    {
        return $this->belongsTo(Wielkosc_paczki::class);
    }
}
