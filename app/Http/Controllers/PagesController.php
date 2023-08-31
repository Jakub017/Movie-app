<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{

    private $apiKey;

    public function __construct()
    {
        $this->apiKey = env('TMDB_API_KEY');
    }

    public function home(){
        $response = Http::get("https://api.themoviedb.org/3/movie/popular?api_key={$this->apiKey}");
        $popularMovies = $response->json()['results'];
        dump($popularMovies);
        return view('home', compact('popularMovies'));
    }

    public function movie(){
        return view('movie');
    }

    public function category(){
        return view('category');
    }
}
