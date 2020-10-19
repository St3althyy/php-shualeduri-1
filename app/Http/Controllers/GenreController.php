<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index() {
        $genres = Genre::all();

        return view('genres/index', ['genres' => $genres]);
    }

    public function read(Genre $genre) {
        return view('genres/read', ['genre' => $genre]);
    }

    public function edit(Genre $genre) {
        return view('genres/edit', ['genre' => $genre]);
    }

    public function create() {
        return view('genres/create');
    }

    public function save(Request $request) {
        $genre = new Genre($request->all());

        $genre->save();

        return redirect()->route('genres.read', $genre);
    }

    public function update(Request $request, Genre $genre) {
        $genre->update($request->all());

        return redirect()->route('genres.read', $genre);
    }

    public function delete(Genre $genre) {
        try {
            $genre->delete();
        } catch (Exception $e) {
        }

        return redirect()->route('genres');
    }
}