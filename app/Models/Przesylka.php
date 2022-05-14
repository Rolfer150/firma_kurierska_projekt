<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Przesylka extends Model
{
    use HasFactory;

    protected $fillable = array(
        'rodzaj_platnosci',
        'cena',
        'rodzaj_przesylki',
        'data_dostarczenia',
        'id_adres'
    );

    protected $hidden = [
        'remember_token',
    ];

    public function adres(): BelongsTo
    {
        return $this->belongsTo(Adres::class);
    }
}
