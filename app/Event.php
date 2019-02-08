<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'title', 'text', 'from_date', 'to_date', 'adress'
    ];

    protected $dates = [
        'from_date', 'to_date'
    ];
}
