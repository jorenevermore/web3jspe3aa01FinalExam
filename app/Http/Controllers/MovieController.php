<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with(['actors', 'directors', 'genres', 'ratings'])->get();
        return response()->json($movies);
    }

    public function show($id)
    {
        $movie = Movie::with(['actors', 'directors', 'genres', 'ratings'])->findOrFail($id);
        return response()->json($movie);
    }
}
