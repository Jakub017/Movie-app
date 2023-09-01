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
        return view('home', compact('popularMovies'));
    }

    public function movie($movieId){
        $response = Http::get("https://api.themoviedb.org/3/movie/$movieId?api_key={$this->apiKey}");
        $movie = $response->json();
        // dump($movie);
        return view('movie', compact('movie'));
    }

    public function category(){
        return view('category');
    }
}
