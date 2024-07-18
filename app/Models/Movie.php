<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Director;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Rating;

class Movie extends Model
{
    protected $primaryKey = 'movie_id'; // Custom primary key

    public function director()
    {
        return $this->belongsTo(Director::class, 'director_id', 'director_id');
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'movie_actor', 'movie_id', 'actor_id');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre', 'movie_id', 'genre_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'movie_id', 'movie_id');
    }
}