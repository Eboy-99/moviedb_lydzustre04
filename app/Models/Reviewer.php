<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    protected $primaryKey = 'reviewer_id'; // Custom primary key

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'reviewer_id', 'reviewer_id');
    }
}