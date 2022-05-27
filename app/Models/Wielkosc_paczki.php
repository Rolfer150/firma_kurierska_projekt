<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wielkosc_paczki extends Model
{
    use HasFactory;

    protected $fillable = array(
        'wielkosc',
    );

    public function przesylkas(): HasMany
    {
        return $this->hasMany(Przesylka::class);
    }
}
