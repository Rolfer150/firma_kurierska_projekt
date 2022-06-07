<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status_przesylki extends Model
{
    use HasFactory;

    protected $fillable = array(
        'data_dostarczenia',
        'data_zamownienia',
        'status_realizacji',
    );
}
