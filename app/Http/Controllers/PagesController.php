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

        /*
            Action - 28
            Fantasy - 14
            Comedy - 35
            Drama - 18
            Mystery - 9648
            Romance - 10749
            Thriller - 53
            Horror - 27
        */
    }

    public function movie($movieId){
        $movie = Http::get("https://api.themoviedb.org/3/movie/$movieId?api_key={$this->apiKey}")->json();
        $posters = Http::get("https://api.themoviedb.org/3/movie/$movieId/images?api_key={$this->apiKey}")->json()['backdrops'];
        $similarMovies = Http::get("https://api.themoviedb.org/3/movie/$movieId/similar?api_key={$this->apiKey}")->json()['results'];
        $videos = Http::get("https://api.themoviedb.org/3/movie/$movieId/videos?api_key={$this->apiKey}")->json()['results'];
        $cast = Http::get("https://api.themoviedb.org/3/movie/$movieId/credits?api_key={$this->apiKey}")->json()['cast'];
        $actors = array_filter($cast, function($actor){
            return $actor['profile_path'] !== null;
        });


        return view('movie', compact('movie', 'posters', 'similarMovies', 'videos', 'actors'));
    }

    public function category($categoryId){
        $movies = Http::get("https://api.themoviedb.org/3/discover/movie?api_key={$this->apiKey}&with_genres=$categoryId")->json()['results'];
        // dump($movies);

        return view('category', compact('movies'));
    }
}
