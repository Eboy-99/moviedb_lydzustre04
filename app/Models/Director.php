<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Director extends Model
{
    protected $primaryKey = 'director_id'; // Custom primary key

    public function movies()
    {
        return $this->hasMany(Movie::class, 'director_id', 'director_id');
    }
}
