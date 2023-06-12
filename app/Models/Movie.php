<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // table name (serve nel caso in cui non dovesse riconoscere il nome della tabella)
    // bisogna inserire il nome della tabella e non il nome del database
    protected $table = 'movies';
}
