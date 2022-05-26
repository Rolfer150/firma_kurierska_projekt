<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paczkomat extends Model
{
    use HasFactory;

    protected $fillable = array(
        'powiat_id',
        'lat',
        'lng',
        'miasto_paczkomat',
        'numer_paczkomat',
        'nazwa_paczkomat',
        'haslo',
    );

    protected $hidden = [
        'haslo',
        'remember_token',
    ];

    public function powiat(): BelongsTo
    {
        return $this->belongsTo(Powiat::class);
    }
}
