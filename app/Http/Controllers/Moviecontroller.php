<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with(['director', 'actors', 'genres', 'ratings.user'])->get();
        return response()->json($movies);
    }

    public function show($id)
    {
        $movie = Movie::with(['director', 'actors', 'genres', 'ratings.user'])->findOrFail($id);
        return response()->json($movie);
    }

    public function getRatings($id)
    {
        $movie = Movie::with('ratings.user')->findOrFail($id);
        return response()->json($movie->ratings);
    }
}
