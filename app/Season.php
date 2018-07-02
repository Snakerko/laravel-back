<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $table = 'seasons';

    protected $fillable = [
        'name', 'synonyms', 'guid'
    ];
}
