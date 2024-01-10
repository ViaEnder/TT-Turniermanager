<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
        'name',
        'localisation',
        'date',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}
