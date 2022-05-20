<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pojazd extends Model
{
    use HasFactory;

    protected $fillable = array(
        'marka',
        'nazwisko_kuriera',
        'model',
        'nr_rejestracyjny',
    );

    public function kurier(): BelongsTo
    {
        return $this->belongsTo(Kurier::class, 'pojazd_id');
    }
}
