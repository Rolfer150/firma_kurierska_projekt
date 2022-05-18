<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rodzaj_platnosci extends Model
{
    use HasFactory;

    protected $fillable = array(
        'platnosc',
    );

    public function przesylkas(): HasMany
    {
        return $this->hasMany(Przesylka::class);
    }
}
