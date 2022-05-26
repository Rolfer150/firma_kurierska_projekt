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
        'miasto_paczkomat',
        'numer_paczkomat',
        'ulica_paczkomat',

    );


    public function powiat(): BelongsTo
    {
        return $this->belongsTo(Powiat::class);
    }
}
