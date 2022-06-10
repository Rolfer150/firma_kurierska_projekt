<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Przesylka extends Model
{
    use HasFactory;

    protected $fillable = array(
        'powiat_id',
        'platnosc_id',
        'dostawa_id',
        'paczkomat_id',
        'wielkosc_id',
        'user_id',
        'status_przesylki',
        'imie_odbiorca',
        'nazwisko_odbiorca',
        'telefon_odbiorca',
        'email_odbiorca',
        'miasto_odbiorca',
        'ulica_odbiorca',
        'numer_domu_odbiorca',
        'numer_mieszkania_odbiorca',
        'kod_pocztowy_odbiorca',
        'data_dostarczenia',
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

    public function powiat(): BelongsTo
    {
        return $this->belongsTo(Powiat::class);
    }

    public function paczkomat(): BelongsTo
    {
        return $this->belongsTo(Paczkomat::class);
    }
}
