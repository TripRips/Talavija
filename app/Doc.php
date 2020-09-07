<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    protected $fillable=['date', 'time', 'name', 'status', 'color', 'document'];
}
