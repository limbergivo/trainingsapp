<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'minutes_played',
        'games_played',
        'injury'
    ];
}
