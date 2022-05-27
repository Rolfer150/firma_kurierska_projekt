<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Paczkomat extends Model
{
    use HasFactory;

    protected $fillable = array(
        'powiat_id',
        'lat',
        'lng',
        'miasto_paczkomat',
        'numer_paczkomat',
        'ulica_paczkomat',
        'haslo_paczkomat',

    );

    protected $hidden = [
        'haslo_paczkomat',
        'remember_token',
    ];

    public function powiat(): BelongsTo
    {
        return $this->belongsTo(Powiat::class);
    }

    public function przesylkas(): HasMany
    {
        return $this->hasMany(Przesylka::class);
    }
}
