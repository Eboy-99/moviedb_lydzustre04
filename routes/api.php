<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\GenreController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('movies', [MovieController::class, 'index']);
    Route::get('movies/{id}', [MovieController::class, 'show']);
    Route::get('directors/{id}', [DirectorController::class, 'show']);
    Route::get('actors/{id}', [ActorController::class, 'show']);
    Route::get('genres/{id}/movies', [GenreController::class, 'getMoviesByGenre']);
    Route::get('movies/{id}/ratings', [MovieController::class, 'getRatings']);
});