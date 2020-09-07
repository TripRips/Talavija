<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'tips', 'datums', 'summa', 'merkis', 'sanemejs'
    ];
}
