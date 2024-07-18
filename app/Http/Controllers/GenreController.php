<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function getMoviesByGenre($id)
    {
        $genre = Genre::with('movies')->findOrFail($id);
        return response()->json($genre->movies);
    }
}
