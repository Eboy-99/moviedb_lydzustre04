<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Reviewer;

class Rating extends Model
{
    protected $primaryKey = 'rating_id'; // Custom primary key

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'movie_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
