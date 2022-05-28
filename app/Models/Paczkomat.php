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
<<<<<<< HEAD
        'nazwa_paczkomat',
        'haslo',
    );

    protected $hidden = [
        'haslo',
=======
        'ulica_paczkomat',
        'haslo_paczkomat',

    );

    protected $hidden = [
        'haslo_paczkomat',
>>>>>>> 6f3e8b9048111ca69a666f9e010f1a4e6a04ed61
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
