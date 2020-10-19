<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();

        return view('movies/index', ['movies' => $movies]);
    }

    public function read(Movie $movie) {
        return view('movies/read', ['movie' => $movie])->with('genre', Genre::query()->findOrFail($movie->getAttribute('genre_id'))['name']);
    }

    public function edit(Movie $movie) {
        return view('movies/edit', ['movie' => $movie]);
    }

    public function create() {
        return view('movies/create');
    }

    public function save(Request $request) {
        $movie = new Movie($request->all());

        $movie->save();

        return redirect()->route('movies.read', $movie);
    }

    public function update(Request $request, Movie $movie) {
        $movie->update($request->all());

        return redirect()->route('movies.read', $movie);
    }

    public function delete(Movie $movie) {
        try {
            $movie->delete();
        } catch (Exception $e) {
        }

        return redirect()->route('movies');
    }
}