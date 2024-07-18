<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Actor extends Model
{
    protected $primaryKey = 'actor_id'; // Custom primary key

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_actor', 'actor_id', 'movie_id');
    }
}