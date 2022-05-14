<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Adres extends Model
{
    use HasFactory;

    protected $fillable = array(
        'miasto',
        'numer_domu',
        'numer_mieszkania',
        'email_kuriera',
        'ulica',
    );

    public function przesylkas(): HasMany
    {
        return $this->hasMany(Przesylka::class);
    }
}
