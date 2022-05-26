<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Powiat extends Model
{
    use HasFactory;

    protected $fillable = array(
        'powiat',
    );

    public function paczkomat(): HasMany
    {
        return $this->hasMany(Paczkomat::class);
    }
}
